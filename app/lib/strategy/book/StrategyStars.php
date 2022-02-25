<?php

namespace App\lib\strategy\book;

class StrategyStars implements StrategyInterface {
    public $titleCount;
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return Str_replace(' ','*',$title);
    }
}
