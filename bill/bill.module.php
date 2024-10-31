<?php
//Bill Module
require_once 'bill.controller.php';
require_once 'bill.service.php';
require_once '../event/event.module.php';

class BillModule {
    public function __construct() {
        $eventModule = new EventModule();
        $billService = new BillService($eventModule);
        $billController = new BillController($billService);
    }
}
?>