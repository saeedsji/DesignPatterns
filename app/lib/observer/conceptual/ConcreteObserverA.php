<?php

namespace App\lib\observer\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * Concrete Observers react to the updates issued by the Subject they had been
 * attached to.
 */
class ConcreteObserverA implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject->state < 3) {
            Log::info('ConcreteObserverA: Reacted to the event state : '.$subject->state);
        }
    }
}
