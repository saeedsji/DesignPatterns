<?php

namespace App\lib\chainOfResponsibility\webServer;

use Illuminate\Support\Facades\Log;

class Compressor extends Handler {
    public function doHandle(HttpRequest $request) {
        Log::info('Compress');
        return false;
    }
}
