<?php

namespace App\lib\abstractFactory\gui\material;

use App\lib\abstractFactory\gui\Button;
use Illuminate\Support\Facades\Log;

class MaterialButton implements Button {

    function render() {
        Log::info('Material Button');
    }
}
