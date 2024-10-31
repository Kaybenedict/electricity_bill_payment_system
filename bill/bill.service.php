<?php
//Bill Service
require_once '../event/event.service.php';

class BillService {
    private $bills = [];
    private $eventService;

    public function __construct($eventService) {
        $this->eventService = $eventService;
    }

    public function createBill($amount) {
        $newBill = [
            'id' => uniqid(),
            'amount' => $amount,
            'status' => 'Pending'
        ];
        $this->bills[] = $newBill;
        $this->eventService->publish('bill_created', $newBill);
        return $newBill;
    }

    public function payBill($validationRef) {
        foreach ($this->bills as &$bill) {
            if ($bill['id'] === $validationRef) {
                $bill['status'] = 'Paid';
                $this->eventService->publish('payment_completed', $bill);
                return $bill;
            }
        }
        throw new Exception('Bill not found');
    }
}
?>