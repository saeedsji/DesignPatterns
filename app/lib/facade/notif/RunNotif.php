<?php

namespace App\lib\facade\notif;

class RunNotif {
    public function run() {
        $service = new NotificationService();
        $service->send('Hello World','target');
    }
}
