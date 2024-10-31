<?php
require_once '../event/event.service.php';

class WalletService {
    private $wallets = [];
    private $eventService;

    public function __construct($eventService) {
        $this->eventService = $eventService;
    }

    public function addFunds($id, $amount) {
        foreach ($this->wallets as &$wallet) {
            if ($wallet['id'] === $id) {
                $wallet['balance'] += $amount;
                $this->eventService->publish('funds_added', $wallet);
                return $wallet;
            }
        }
        $newWallet = [
            'id' => $id,
            'balance' => $amount
        ];
        $this->wallets[] = $newWallet;
        $this->eventService->publish('funds_added', $newWallet);
        return $newWallet;
    }
}
?>