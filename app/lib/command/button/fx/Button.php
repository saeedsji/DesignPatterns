<?php

namespace App\lib\command\button\fx;

class Button {

    private string $label;
    private Command $command;

    public function __construct(Command $command) {
    $this->command = $command;
    }

    public function click() {
        $this->command->execute();
    }

    public function getLabel(): string {
        return $this->label;
    }

    public function setLabel(string $label): void {
        $this->label = $label;
    }
}
