<?php

namespace App\lib\oop;

use JetBrains\PhpStorm\NoReturn;

class User {
    // Fields (attributes)
    public string $name;

    public function __construct(string $name, int $age) {
        $this->name = $name;
    }

    // Methods
    #[NoReturn] public function sayHello() {
        dd("Hi, my name is " . $this->name);
    }


}
