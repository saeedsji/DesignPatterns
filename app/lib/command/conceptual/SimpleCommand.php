<?php

namespace App\lib\command\conceptual;

use Illuminate\Support\Facades\Log;

/**
 * Some commands can implement simple operations on their own.
 */
class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        Log::info("SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")");
    }
}
