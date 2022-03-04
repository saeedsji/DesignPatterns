<?php

namespace App\lib\facade\notif;

class NotificationService {
    public function send($message, $target) {
        $server = new NotificationServer();
        $connection = $server->connect('ip');
        $authToken = $server->authenticate('appId', 'key');
        $server->send($authToken, new Message($message), $target);
        $connection->disconnect();
    }
}
