<?php

namespace App\lib\chainOfResponsibility\webServer;

abstract class Handler {
    private  $next;

    public function __construct($next) {
        $this->next = $next;
    }

    public function handle(HttpRequest $request) {
        if ($this->doHandle($request))
            return;

        if ($this->next != null)
            $this->next->handle($request);
    }

    abstract public function doHandle(HttpRequest $request);
}
