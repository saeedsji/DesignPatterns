<?php

namespace App\lib\command\conceptual;

class RunConceptualCommand {

    public function run() {
        /**
         * The client code can parameterize an invoker with any commands.
         */
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));
        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));
        $invoker->doSomethingImportant();
    }
}
