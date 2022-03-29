<?php

namespace App\lib\factory\payment;

interface Gateway {
    function call($amount): array;
}
