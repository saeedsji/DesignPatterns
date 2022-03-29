<?php

namespace App\lib\factory\payment;

use Illuminate\Support\Facades\Log;

class ZarinpalService implements Gateway {

    function call($amount): array {
        Log::info('Zarinpal API called for amount : ' . $amount);
        return array('url' => 'https://Zarinpal.com', 'success' => true);
    }
}
