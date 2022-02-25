<?php

namespace App\lib\strategy\example;

class RunExample {
    public function run() {
        /**
         * The client code picks a concrete strategy and passes it to the context. The
         * client should be aware of the differences between strategies in order to make
         * the right choice.
         */
//        $context = new Context(new ConcreteStrategyA());
//        echo "Client: Strategy is set to normal sorting.\n";
//        return $context->doSomeBusinessLogic(["a", "b", "c", "d", "e"]);

        $context = new Context(new ConcreteStrategyB());
        echo "Client: Strategy is set to reverse sorting.\n";
        return $context->doSomeBusinessLogic(["a", "b", "c", "d", "e"]);


    }
}
