<?php

namespace App\lib\composite\shape;

class Group implements  Component {
    private  $components;

    public function add($component) {
        $this->components[] = $component;
    }

    public function render() {

        foreach ($this->components as $component)
            $component->render();
    }

    function move() {
        foreach ($this->components as $component)
            $component->move();
    }
}
