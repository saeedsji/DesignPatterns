<?php

namespace App\lib\observer\conceptual;

use Illuminate\Support\Facades\Log;

class ConcreteObserverB implements SplObserver {

    public function update(SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
           Log::info('ConcreteObserverB: Reacted to the event state : '.$subject->state);
        }
    }
}
