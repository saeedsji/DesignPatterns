<?php

namespace App\lib\abstractFactory\gui\ant;

use App\lib\abstractFactory\gui\Button;
use Illuminate\Support\Facades\Log;

class AntButton implements Button {

    function render() {
        Log::info('Ant Button');

    }
}
