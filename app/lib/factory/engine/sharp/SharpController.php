<?php

namespace App\lib\factory\engine\sharp;

use App\lib\factory\engine\matcha\Controller;

class SharpController extends Controller {

    protected function createViewEngine() {
        return new SharpViewEngine();
    }

}
