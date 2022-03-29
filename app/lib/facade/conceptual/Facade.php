<?php

namespace App\lib\facade\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * The Facade class provides a simple interface to the complex logic of one or
 * several subsystems. The Facade delegates the client requests to the
 * appropriate objects within the subsystem. The Facade is also responsible for
 * managing their lifecycle. All of these shields the client from the undesired
 * complexity of the subsystem.
 */
class Facade {
    protected $subsystem1;

    protected $subsystem2;

    /**
     * Depending on your application's needs, you can provide the Facade with
     * existing subsystem objects or force the Facade to create them on its own.
     */
    public function __construct(Subsystem1 $subsystem1 = null, Subsystem2 $subsystem2 = null) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1();
        $this->subsystem2 = $subsystem2 ?: new Subsystem2();
    }

    /**
     * The Facade's methods are convenient shortcuts to the sophisticated
     * functionality of the subsystems. However, clients get only to a fraction
     * of a subsystem's capabilities.
     */
    public function operation() {
        Log::alert("Facade initializes subsystems:");
        $this->subsystem1->operation1();
        $this->subsystem1->operationN();
        Log::alert("Facade orders subsystems to perform the action:");
        $this->subsystem2->operationZ();
        $this->subsystem2->operation1();

    }
}
