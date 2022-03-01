<?php

namespace App\lib\chainOfResponsibility\webServer;

use Illuminate\Support\Facades\Log;

class Authenticator extends Handler {

    public function doHandle(HttpRequest $request) {
        $isvalid = ($request->getUsername() == 'admin' && $request->getPassword() == '1234');
        Log::info('Authentication');
        return !$isvalid;
    }

}
