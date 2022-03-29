<?php

namespace App\lib\factory\payment;

class MelatCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new MelatService();
    }
}
