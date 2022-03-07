<?php

namespace App\lib\factory\conceptual;

use Illuminate\Support\Facades\Log;

class RunFactoryConceptual {
    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    public function run() {
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        Log::alert("App: Launched with the ConcreteCreator1");
        $this->clientCode(new ConcreteCreator1());

        Log::alert("App: Launched with the ConcreteCreator2");
        $this->clientCode(new ConcreteCreator2());
    }


    function clientCode(Creator $creator) {
        Log::info("Client: I'm not aware of the creator's class, but it still works. " . $creator->someOperation());
    }
}
