<?php

namespace App\lib\command\conceptual;

/**
 * The Command interface declares a method for executing a command.
 */
interface Command
{
    public function execute(): void;
}

