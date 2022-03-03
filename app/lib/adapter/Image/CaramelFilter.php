<?php

namespace App\lib\adapter\Image;

use App\lib\adapter\Image\avaFilters\Caramel;

class CaramelFilter implements Filter {

    private $caramel;

    public function __construct(Caramel $caramel) {
        $this->caramel = $caramel;
    }

    function apply(Image $image) {
        $this->caramel->init();
        $this->caramel->render($image);
    }
}
