<?php

namespace App\lib\observer\dataSource;

class DataSource extends Subject {
    private $value;

    public function getValue() {
        return $this->value;
    }

    public function setValue($value): void {
        $this->value = $value;
        $this->notifyObservers($value);
    }
}
