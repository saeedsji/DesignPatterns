<?php

namespace App\lib\strategy\upload;

use Illuminate\Support\Facades\Log;

class JpegCompressor implements  Compressor {

    function compress(string $fileName) {
        Log::info('Compressing using JPEG');
    }
}
