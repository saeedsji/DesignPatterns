<?php

namespace App\lib\adapter\Image;

use App\lib\adapter\Image\avaFilters\Caramel;

class RunImage {
    public function run() {
        $imageView = new ImageView(new Image());
        $imageView->apply(new CaramelFilter(new Caramel()));
    }
}
