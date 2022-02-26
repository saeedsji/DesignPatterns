<?php

namespace App\lib\observer\conceptual;

class RunConceptualObserver {

    public function run() {
        $subject = new Subject();

        $o1 = new ConcreteObserverA();
        $subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);

        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
    }
}