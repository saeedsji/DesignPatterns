<?php

namespace App\lib\strategy\example;

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
