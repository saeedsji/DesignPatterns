<?php

namespace App\lib\strategy\example;


/**
 * The Strategy interface declares operations common to all supported versions
 * of some algorithm.
 *
 * The Context uses this interface to call the algorithm defined by Concrete
 * Strategies.
 */
interface Strategy {
    public function doAlgorithm(array $data): array;
}
