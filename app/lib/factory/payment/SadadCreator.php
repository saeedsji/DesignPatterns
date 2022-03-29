<?php

namespace App\lib\factory\payment;

class SadadCreator extends PaymentFactory {

    public function paymentMethod(): Gateway {
        return new SadadService();
    }
}
