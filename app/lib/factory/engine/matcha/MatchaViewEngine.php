<?php

namespace App\lib\factory\engine\matcha;

class MatchaViewEngine implements ViewEngine {

    public function render(string $viewName, $conext) {
        return 'View renders by Matcha';
    }
}
