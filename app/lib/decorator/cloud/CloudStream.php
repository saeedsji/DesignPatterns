<?php

namespace App\lib\decorator\cloud;

use Illuminate\Support\Facades\Log;

class CloudStream implements Stream {
    public function write($data) {
        Log::info('Storing: ' . $data);
    }
}
