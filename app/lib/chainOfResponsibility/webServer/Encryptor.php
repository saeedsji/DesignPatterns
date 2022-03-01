<?php

namespace App\lib\chainOfResponsibility\webServer;

use Illuminate\Support\Facades\Log;

class Encryptor extends Handler {

    public function doHandle(HttpRequest $request) {
        Log::info('Encryption');
        return false;
    }
}
