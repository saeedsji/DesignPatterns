<?php

namespace App\lib\builder\slide;

class PdfDocumentBuilder implements PresentationBuilder {

    private PdfDocument $document;

    public function __construct() {
        $this->document = new PdfDocument();
    }

    function addSlide(Slide $slide) {
        $this->document->addPage($slide->getText());
    }

    public function getPdfDocument() {
        return $this->document;
    }
}
