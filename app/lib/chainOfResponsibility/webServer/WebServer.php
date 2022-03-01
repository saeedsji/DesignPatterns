<?php

namespace App\lib\chainOfResponsibility\webServer;

class WebServer {
    private $handler;

    public function __construct($handler) {
        $this->handler = $handler;
    }

    public function handle(HttpRequest $request) {
        $this->handler->handle($request);
    }
}
