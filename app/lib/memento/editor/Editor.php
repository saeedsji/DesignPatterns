<?php

namespace App\lib\memento\editor;

use JetBrains\PhpStorm\Pure;

class Editor {
    private string $content;

    #[Pure] public function createState() {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state) {
        $this->content = $state->getContent();
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }
}
