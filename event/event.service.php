<?php
class EventService {
    public function publish($event, $payload) {
        echo "Event Published: $event" . PHP_EOL;
        print_r($payload);
        // Here, integrate with AWS SNS/SQS or use a mock for local testing
    }
}
?>