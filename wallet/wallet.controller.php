<?php
require_once 'wallet.service.php';

class WalletController {
    private $walletService;

    public function __construct($walletService) {
        $this->walletService = $walletService;
    }

    public function addFunds($id, $amount) {
        return $this->walletService->addFunds($id, $amount);
    }
}
?>