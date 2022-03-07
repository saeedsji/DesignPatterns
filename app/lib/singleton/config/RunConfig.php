<?php

namespace App\lib\singleton\config;

use Illuminate\Support\Facades\Log;

class RunConfig {
    public function run() {
        $config = ConfigManager::getInstance();
        $other = ConfigManager::getInstance();

        $config->set('name','saeed');

        Log::info($other->get('name'));
    }
}
