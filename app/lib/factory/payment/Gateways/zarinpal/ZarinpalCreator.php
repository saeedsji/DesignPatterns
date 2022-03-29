<?php

namespace App\lib\factory\payment\Gateways\zarinpal;

use App\lib\factory\payment\Gateways\Gateway;
use App\lib\factory\payment\PaymentFactory;

class ZarinpalCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new ZarinpalService();
    }
}
