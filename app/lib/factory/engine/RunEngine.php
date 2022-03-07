<?php

namespace App\lib\factory\engine;

class RunEngine {
    public function run() {
        $productController = new ProductsController();
        $productController->listProducts();
    }
}
