<?php

namespace App\lib\oop;

class MailService {

    public function sendEmail() {
        $this->connect();
        $this->authenticate();
        $this->disconnect();
    }

    private function connect() {
        print_r('Connect');
    }

    private function disconnect() {
        print_r('Disconnect');
    }

    private function authenticate() {
        print_r('Authenticate');
    }


}
