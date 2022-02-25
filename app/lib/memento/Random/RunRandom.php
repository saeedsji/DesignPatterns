<?php

namespace App\lib\memento\Random;

class RunRandom {

    public function run() {
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "\n";
        $caretaker->showHistory();

        echo "\n Client: Now, let's rollback! \n\n";
        $caretaker->undo();

        echo "\n Client: Once more! \n\n";
        $caretaker->undo();
    }
}
