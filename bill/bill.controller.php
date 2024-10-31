<?php
// Bill Controller
require_once 'bill.service.php';

class BillController {
    private $billService;

    public function __construct($billService) {
        $this->billService = $billService;
    }

    public function createBill($amount) {
        return $this->billService->createBill($amount);
    }

    public function payBill($validationRef) {
        return $this->billService->payBill($validationRef);
    }
}
?>