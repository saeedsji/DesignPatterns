<?php

namespace App\lib\chainOfResponsibility\webServer;

use Illuminate\Support\Facades\Log;

class Logger  extends Handler {
    public function doHandle(HttpRequest $request) {
        Log::info('Log');
        return false;
    }
}
