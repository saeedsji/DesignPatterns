<?php

namespace App\lib\memento\ticket;

class Memento {
    public function __construct(private State $state) {
    }

    public function getState(): State {
        return $this->state;
    }
}
