<?php

namespace App\lib\strategy\order;

/**
 * This class helps to produce a proper strategy object for handling a payment.
 */
class PaymentFactory
{
    /**
     * Get a payment method by its ID.
     *
     * @param string $id
     * @return PaymentMethod
     * @throws \Exception
     */
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        return match ($id) {
            "cc" => new CreditCardPayment(),
            "paypal" => new PayPalPayment(),
            default => throw new \Exception("Unknown Payment Method"),
        };
    }
}
