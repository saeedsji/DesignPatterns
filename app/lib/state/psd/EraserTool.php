<?php

namespace App\lib\state\psd;

use Illuminate\Support\Facades\Log;

class EraserTool implements Tool{

    function mouseDown() {
        Log::info('Eraser icon');

    }

    function mouseUp() {
        Log::info('Erase something');
    }
}
