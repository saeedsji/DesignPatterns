<?php

namespace App\lib\oop;

class Mobile {
    private $model;
    private $price;
    const name = 'my name is saeed';

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void {
        $this->price = $price;
    }
}
