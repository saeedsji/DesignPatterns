<?php

namespace App\lib\memento\editor;

class EditorState {
    private string $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getContent(): string {
        return $this->content;
    }
}
