<?php

namespace App\lib\strategy\book;

class StrategyContext {
    private $strategy;
    public function __construct($strategy_ind_id) {
        $this->strategy = match ($strategy_ind_id) {
            "C" => new StrategyCaps(),
            "E" => new StrategyExclaim(),
            "S" => new StrategyStars(),
        };
    }
    public function showBookTitle($book) {
        return $this->strategy->showTitle($book);
    }
}
