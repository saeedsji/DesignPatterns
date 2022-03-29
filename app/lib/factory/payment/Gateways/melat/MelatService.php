<?php

namespace App\lib\factory\payment\Gateways\melat;

use App\lib\factory\payment\Gateways\Gateway;
use Illuminate\Support\Facades\Log;

class MelatService implements Gateway {

    function call($amount): array {
        Log::info('melat API called for amount : ' . $amount);
        return array('url' => 'https://melat.com', 'success' => true);
    }
}
