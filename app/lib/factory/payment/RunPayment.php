<?php

namespace App\lib\factory\payment;

use App\lib\factory\payment\Gateways\melat\MelatCreator;
use App\lib\factory\payment\Gateways\sadad\SadadCreator;
use App\lib\factory\payment\Gateways\zarinpal\ZarinpalCreator;

class RunPayment {
    public function run() {
        //        $zarinpal = new ZarinpalCreator();
        //        return $zarinpal->pay(2000);

        return $this->clientCode(new ZarinpalCreator(), 12000);
        //        return $this->clientCode(new MelatCreator(), 12000);
        //        return $this->clientCode(new SadadCreator(), 13000);
    }

    public function clientCode(PaymentFactory $paymentFactory, $amount) {
        return $paymentFactory->pay($amount);
    }
}
