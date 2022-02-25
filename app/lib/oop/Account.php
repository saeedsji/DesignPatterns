<?php

namespace App\lib\oop;

class Account {
    private float $balance = 0;

    public function deposit($amount) {
        if ($amount > 0)
            $this->balance = $this->balance + $amount;
    }

    public function withdraw($amount) {
        if ($amount > 0)
            $this->balance = $this->balance - $amount;
    }

    public function getBalance() {
        return $this->balance;
    }

    public  function drawUIControl(UIControl $control){
        $control->draw();
    }
}
