<?php

namespace App\lib\factory\engine\sharp;

use App\lib\factory\engine\matcha\ViewEngine;

class SharpViewEngine implements ViewEngine {

    public function render(string $viewName, $conext) {
        return 'View rendered by Sharp';
    }
}
