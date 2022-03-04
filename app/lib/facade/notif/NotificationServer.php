<?php

namespace App\lib\facade\notif;

use Illuminate\Support\Facades\Log;

class NotificationServer {
    // connect() -> connection
    // autheticate(appId,key) -> AuthToken
    // send (authToken,message,target)
    // conn.disconnect()

    public function connect($ipAddress) {
        return new Connection();
    }

    public function authenticate($appID, $key) {
        return new AuthToken();
    }

    public function send(AuthToken $authToken, Message $message, $target) {
        Log::info('Sending a message');
    }
}
