<?php
require_once 'wallet.controller.php';
require_once 'wallet.service.php';
require_once '../event/event.module.php';

class WalletModule {
    public function __construct() {
        $eventModule = new EventModule();
        $walletService = new WalletService($eventModule);
        $walletController = new WalletController($walletService);
    }
}
?>