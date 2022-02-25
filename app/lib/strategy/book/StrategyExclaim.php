<?php

namespace App\lib\strategy\book;

class StrategyExclaim implements StrategyInterface {
    public $titleCount;

    public function showTitle(Book $book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return Str_replace(' ','!',$title);
    }
}
