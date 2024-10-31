<?php
require_once 'event.service.php';

class EventModule {
    public function __construct() {
        $eventService = new EventService();
    }
}
?>