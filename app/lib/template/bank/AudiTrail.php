<?php

namespace App\lib\template\bank;

use Illuminate\Support\Facades\Log;

class AudiTrail {
    public function record() {
        Log::info('Audit');
    }
}
