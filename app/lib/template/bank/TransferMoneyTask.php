<?php

namespace App\lib\template\bank;

use Illuminate\Support\Facades\Log;

class TransferMoneyTask extends Task {
    protected function doExecute() {
        Log::info('Transfer Money');
    }
}
