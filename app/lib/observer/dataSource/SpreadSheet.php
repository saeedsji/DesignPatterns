<?php

namespace App\lib\observer\dataSource;

use Illuminate\Support\Facades\Log;

class SpreadSheet implements Observer {

    public function update($value) {
        Log::info('Spreadsheet got notified! value : ' . $value);
    }
}
