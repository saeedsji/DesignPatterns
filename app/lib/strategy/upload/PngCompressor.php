<?php

namespace App\lib\strategy\upload;

use Illuminate\Support\Facades\Log;

class PngCompressor implements Compressor {

    function compress(string $fileName) {
        Log::info('Compressing using PNG');

    }
}
