<?php

namespace App\lib\factory\payment\Gateways\sadad;

use App\lib\factory\payment\Gateways\Gateway;
use App\lib\factory\payment\PaymentFactory;

class SadadCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new SadadService();
    }
}
