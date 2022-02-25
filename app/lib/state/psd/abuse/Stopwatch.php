<?php

namespace App\lib\state\psd\abuse;

use Illuminate\Support\Facades\Log;

class Stopwatch {

    private bool $isRunnig;

    public function click() {
        if ($this->isRunnig) {
            $this->isRunnig = false;
            Log::info('Stpped');
        } else {
            $this->isRunnig = true;
            Log::info('Running');
        }
    }
}
