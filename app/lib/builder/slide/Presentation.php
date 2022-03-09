<?php

namespace App\lib\builder\slide;

class Presentation {
    private $slides = [];

    public function addSlide(Slide $slide) {
        $this->slides[] = $slide;
    }

    public function export(PresentationBuilder $builder) {
        $builder->addSlide(new Slide('Copyright!'));
        foreach ($this->slides as $slide)
        {
            $builder->addSlide($slide);
        }
    }
}
