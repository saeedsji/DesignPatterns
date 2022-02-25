<?php

namespace App\lib\oop;

abstract class UIControl {
    public function enable() {
        return 'enable';
    }
    public abstract function draw();
}
