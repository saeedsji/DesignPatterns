<?php

namespace App\lib\factory\payment;

abstract class PaymentFactory {

    abstract public function paymentMethod(): Gateway;

    public function pay($amount) {
        $paymentMethod = $this->paymentMethod();
        return $paymentMethod->call($amount);
    }
}
