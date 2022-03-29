<?php

namespace App\lib\factory\payment;

use Illuminate\Support\Facades\Log;

class MelatService implements Gateway {

    function call($amount): array {
        Log::info('Melat API called for amount : ' . $amount);
        return array('url' => 'https://melat.com', 'success' => true);
    }
}
