<?php

namespace App\lib\command\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * The Receiver classes contain some important business logic. They know how to
 * perform all kinds of operations, associated with carrying out a request. In
 * fact, any class may serve as a Receiver.
 */
class Receiver
{
    public function doSomething(string $a): void
    {
       Log::info("Receiver: Working on (" . $a . ".)");
    }

    public function doSomethingElse(string $b): void
    {
        Log::info("Receiver: Also working on (" . $b . ".)");
    }
}
