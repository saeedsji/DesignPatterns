<?php

namespace App\lib\observer\dataSource;

use Illuminate\Support\Facades\Log;

class SpreadSheet implements Observer {

    private $dataSource;

    public function __construct(DataSource $dataSource) {
        $this->dataSource = $dataSource;
    }

    public function update() {
        Log::info('Spreadsheet got notified get value : ' . $this->dataSource->getValue());
    }
}
