<?php

namespace App\lib\builder\slide;

class RunSlide {

    public function run() {
        $presentation = new Presentation();
        $presentation->addSlide(new Slide('Slide 1'));
        $presentation->addSlide(new Slide('Slide 2'));


        //        $builder = new PdfDocumentBuilder();
        //        $presentation->export($builder);
        //        $pdf = $builder->getPdfDocument();

        $builder = new MovieBuilder();
        $presentation->export($builder);
        $movie = $builder->getMovie();
    }
}
