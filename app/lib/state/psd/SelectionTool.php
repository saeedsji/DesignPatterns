<?php

namespace App\lib\state\psd;

use Illuminate\Support\Facades\Log;

class SelectionTool implements Tool {

    function mouseDown() {
        Log::info('Selection icon');
    }

    function mouseUp() {
        Log::info('Draw a dashed rectangle');
    }
}
