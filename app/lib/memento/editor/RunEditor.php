<?php

namespace App\lib\memento\editor;

class RunEditor {

    public function run() {
        $editor = new Editor();
        $history = new History();
        $editor->setContent('a');
        $history->push($editor->createState());

        $editor->setContent('b');
        $history->push($editor->createState());

        $editor->setContent('c');
        $history->push($editor->createState());

        $editor->setContent('d');
        $history->push($editor->createState());

        $editor->setContent('e');


        $editor->restore($history->pop());
        $editor->restore($history->pop());

        return $editor->getContent();
    }
}
