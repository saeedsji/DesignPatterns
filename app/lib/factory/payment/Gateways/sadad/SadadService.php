<?php

namespace App\lib\factory\payment\Gateways\sadad;

use App\lib\factory\payment\Gateways\Gateway;
use Illuminate\Support\Facades\Log;

class SadadService implements Gateway {

    function call($amount): array {
        Log::info('sadad API called for amount : ' . $amount);
        return array('url' => 'https://sadad.com', 'success' => true);
    }
}
