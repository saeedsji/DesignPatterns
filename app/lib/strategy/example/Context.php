<?php

namespace App\lib\strategy\example;

use Illuminate\Support\Facades\Log;

/**
 * The Context defines the interface of interest to clients.
 */
class Context {
    /**
     * @var Strategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    private $strategy;

    /**
     * Usually, the Context accepts a strategy through the constructor, but also
     * provides a setter to change it at runtime.
     */
    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setStrategy(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     */
    public function doSomeBusinessLogic($array) {

        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        return $this->strategy->doAlgorithm($array);

    }
}
