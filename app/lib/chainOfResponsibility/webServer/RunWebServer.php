<?php

namespace App\lib\chainOfResponsibility\webServer;

class RunWebServer {

    public function run() {
        // authenticator -> logger -> compressor -> encryptor

        $encryptor = new Encryptor(null);
        $compressor = new Compressor($encryptor);
        $logger = new Logger($compressor);
        $authenticator = new Authenticator($logger);
        $server = new WebServer($authenticator);
        $server->handle(new HttpRequest('admin','1234'));
        //$server->handle(new HttpRequest('-', '1234'));

    }
}
