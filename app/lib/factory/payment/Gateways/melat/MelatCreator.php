<?php

namespace App\lib\factory\payment\Gateways\melat;


use App\lib\factory\payment\Gateways\Gateway;
use App\lib\factory\payment\PaymentFactory;

class MelatCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new MelatService();
    }
}
