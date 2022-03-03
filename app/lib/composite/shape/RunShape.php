<?php

namespace App\lib\composite\shape;

class RunShape {
    public function run() {
        $group1 = new Group();
        $group1->add(new Shape()); //square
        $group1->add(new Shape()); //square

        $group2 = new Group();
        $group2->add(new Shape()); //circle
        $group2->add(new Shape()); //circle

        $group = new Group();
        $group->add($group1);
        $group->add($group2);
        $group->render();
        $group->move();
    }
}
