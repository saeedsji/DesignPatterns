<?php

namespace App\lib\adapter\Image;

class ImageView {

    private $image;

    public function __construct($image) {
        $this->image = $image;
    }

    public function apply(Filter $filter) {
        $filter->apply($this->image);
    }

}
