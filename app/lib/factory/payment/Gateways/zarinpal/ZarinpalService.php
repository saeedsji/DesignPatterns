<?php

namespace App\lib\factory\payment\Gateways\zarinpal;

use App\lib\factory\payment\Gateways\Gateway;
use Illuminate\Support\Facades\Log;

class ZarinpalService implements Gateway {

    function call($amount): array {
        Log::info('Zarinpal API called for amount : ' . $amount);
        return array('url' => 'https://Zarinpal.com', 'success' => true);
    }
}
