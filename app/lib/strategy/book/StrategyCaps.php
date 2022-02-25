<?php

namespace App\lib\strategy\book;

class StrategyCaps implements StrategyInterface {
    public $titleCount;

    public function showTitle(Book $book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper ($title);
    }
}
