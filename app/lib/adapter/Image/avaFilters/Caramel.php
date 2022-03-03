<?php

namespace App\lib\adapter\Image\avaFilters;

use App\lib\adapter\Image\Image;
use Illuminate\Support\Facades\Log;

class Caramel {
    public function init() {
        Log::info('Init the outsider class that not adapt');

    }

    public function render(Image $image) {
        Log::info('Applying Caramel Filter');
    }
}
