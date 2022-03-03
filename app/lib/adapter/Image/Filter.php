<?php

namespace App\lib\adapter\Image;

interface Filter {
    function apply(Image $image);
}
