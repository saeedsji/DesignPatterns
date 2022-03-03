<?php

namespace App\lib\composite\shape;

use Illuminate\Support\Facades\Log;

class Shape implements Component {

    public function render() {
        Log::info('Render Shape');
    }

    function move() {
        Log::info('Move Shape');

    }
}
