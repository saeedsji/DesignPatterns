<?php

namespace App\lib\prototype\shape;

class ContextMenu {

    public function duplicate(Component $component) {
        $newComponent = $component->clone();
    }

}
