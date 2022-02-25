<?php

namespace App\lib\state\psd;

use Illuminate\Support\Facades\Log;

class BrushTool implements Tool {

    function mouseDown() {
        Log::info('Brush icon');
    }

    function mouseUp() {
        Log::info('Draw a line');
    }
}
