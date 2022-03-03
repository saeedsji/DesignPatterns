<?php

namespace App\lib\adapter\Image;

use App\lib\adapter\Image\avaFilters\Caramel;

class CaramelAdapter extends Caramel  implements Filter {

    function apply(Image $image) {
        $this->init();
        $this->render($image);
    }
}
