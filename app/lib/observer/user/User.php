<?php

namespace App\lib\observer\user;

class User {
    public $attributes = [];

    public function update($data): void {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
