<?php

namespace App\lib\factory\payment;

use Illuminate\Support\Facades\Log;

class SadadService implements Gateway {

    function call($amount): array {
        Log::info('Sadad API called for amount : ' . $amount);
        return array('url' => 'https://Sadad.com', 'success' => true);
    }
}
