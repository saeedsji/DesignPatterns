<?php

namespace App\lib\factory\engine\matcha;

use Illuminate\Support\Facades\Log;

class Controller {

    public function render(string $viewName, $conext) {
        $engine = $this->createViewEngine();
        $html = $engine->render($viewName, $conext);
        Log::info($html);
    }

    protected function createViewEngine() {
        return new MatchaViewEngine();
    }

}
