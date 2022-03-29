<?php

namespace App\lib\facade\conceptual;

use Illuminate\Support\Facades\Log;

class RunFacadeConceptual {

    /**
     * The client code may have some of the subsystem's objects already created. In
     * this case, it might be worthwhile to initialize the Facade with these objects
     * instead of letting the Facade create new instances.
     */
    public function run() {
        // $subsystem1 = new Subsystem1();
        // $subsystem2 = new Subsystem2();
        $facade = new Facade();
        $facade->operation();
    }


}
