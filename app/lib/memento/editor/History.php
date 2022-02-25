<?php

namespace App\lib\memento\editor;

class History {
    private array $states;

    public function push(EditorState $state) {
        $this->states[] = $state;
    }

    public function pop() {
        $lastIndex = count((array)$this->states) - 1;
        $lastState = $this->states[$lastIndex];
        unset($this->states[$lastIndex]);
        return $lastState;
    }
}
