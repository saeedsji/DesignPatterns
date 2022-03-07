<?php

namespace App\lib\factory\engine;

use App\lib\factory\engine\matcha\Controller;
use App\lib\factory\engine\matcha\MatchaViewEngine;
use App\lib\factory\engine\sharp\SharpController;

class ProductsController extends SharpController {

    public function listProducts() {
        //Get products from a database
        $context = [];
        $this->render('products.html',$context);
    }
}
