<?php

namespace App\lib\facade\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * The Subsystem can accept requests either from the facade or client directly.
 * In any case, to the Subsystem, the Facade is yet another client, and it's not
 * a part of the Subsystem.
 */
class Subsystem1 {
    public function operation1() {
        Log::info("Subsystem1: Ready!");
    }

    public function operationN() {
        Log::info("Subsystem1: Go!");
    }
}
