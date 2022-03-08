<?php

namespace App\lib\abstractFactory\gui\ant;

use App\lib\abstractFactory\gui\TextBox;
use Illuminate\Support\Facades\Log;

class AntTextBox implements TextBox {

    function render() {
        Log::info('Ant TextBox');
    }
}
