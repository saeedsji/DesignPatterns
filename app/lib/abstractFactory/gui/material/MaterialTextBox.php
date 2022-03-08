<?php

namespace App\lib\abstractFactory\gui\material;

use App\lib\abstractFactory\gui\TextBox;
use Illuminate\Support\Facades\Log;

class MaterialTextBox implements TextBox {
    function render() {
        Log::info('Material TextBox');
    }
}
