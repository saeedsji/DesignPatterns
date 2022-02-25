<?php

namespace App\lib\memento\Random;

interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}
