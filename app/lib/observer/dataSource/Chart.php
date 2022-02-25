<?php

namespace App\lib\observer\dataSource;

use Illuminate\Support\Facades\Log;

class Chart implements Observer {

    public function update($value) {
        Log::info('Chart got updated! value : ' . $value);
    }
}
