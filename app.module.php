<?php
require_once './bill/bill.module.php';
require_once './wallet/wallet.module.php';
require_once './event/event.module.php';

class AppModule {
    public function __construct() {
        $billModule = new BillModule();
        $walletModule = new WalletModule();
        $eventModule = new EventModule();
    }
}
?>