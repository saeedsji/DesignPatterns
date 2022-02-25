<?php

namespace App\lib\strategy\upload;

use Illuminate\Support\Facades\Log;

class ImageStorage {

    public function store(string $fileName, Compressor $compressor, Filter $filter) {
        $compressor->compress($fileName);
        $filter->apply($fileName);
    }

}
