<?php

namespace App\lib\builder\slide;

class MovieBuilder implements PresentationBuilder {
    private $movie;

    public function __construct() {
        $this->movie = new Movie();
    }
    function addSlide(Slide $slide) {
        $this->movie->addFrame($slide->getText(), 3);
    }

    public function getMovie() {
        return $this->movie;
    }
}
