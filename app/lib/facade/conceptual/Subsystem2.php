<?php

namespace App\lib\facade\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * Some facades can work with multiple subsystems at the same time.
 */
class Subsystem2 {
    public function operation1() {
        Log::info("Subsystem2: Get ready!");
    }

    public function operationZ() {
        Log::info("Subsystem2: Fire!");
    }
}
