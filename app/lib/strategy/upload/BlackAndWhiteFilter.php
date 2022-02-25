<?php

namespace App\lib\strategy\upload;

use Illuminate\Support\Facades\Log;

class BlackAndWhiteFilter implements  Filter {

    function apply(string $fileName) {
        Log::info('applying black and white filter');
    }
}
