<?php

namespace App\lib\prototype\shape;

use Illuminate\Support\Facades\Log;

class Circle implements Component {

    private $radius;

    function render() {
        Log::info('Rendering a circle');
    }


    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius): void {
        $this->radius = $radius;
    }

    function clone() {
       $newCircle = new Circle();
       $newCircle->setRadius($this->radius);
       return $newCircle;
    }
}
