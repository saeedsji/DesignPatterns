<?php

namespace App\lib\factory\payment\Gateways;

interface Gateway {
    function call($amount): array;
}
