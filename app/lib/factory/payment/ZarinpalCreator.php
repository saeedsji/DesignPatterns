<?php

namespace App\lib\factory\payment;

class ZarinpalCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new ZarinpalService();
    }
}
