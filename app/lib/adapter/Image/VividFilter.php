<?php

namespace App\lib\adapter\Image;

use Illuminate\Support\Facades\Log;

class VividFilter  implements Filter {

    function apply(Image $image) {
       Log::info('Applying Vivid Filter');
    }
}
