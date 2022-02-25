<?php

namespace App\lib\observer\dataSource;

use Illuminate\Support\Facades\Log;

class Chart implements Observer {

    private $dataSource;

    public function __construct(DataSource $dataSource) {
        $this->dataSource = $dataSource;
    }

    public function update() {
        Log::info('Chart got updated: get value: ' . $this->dataSource->getValue());
    }
}
