<?php

namespace App\lib\observer\conceptual;

interface SplObserver {
    public function update(SplSubject $subject);
}
