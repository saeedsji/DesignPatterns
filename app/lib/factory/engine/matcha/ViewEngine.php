<?php

namespace App\lib\factory\engine\matcha;

interface ViewEngine {
    public function render(string $viewName, $conext);
}
