<?php

namespace App\lib\strategy\book;

class RunBook {

    public  function run()
    {
        $this->writeln('BEGIN TESTING STRATEGY PATTERN');
        $this->writeln('');

        $book = new Book('PHP for Cats','Larry Truett');

        $strategyContextC = new StrategyContext('C');
        $strategyContextE = new StrategyContext('E');
        $strategyContextS = new StrategyContext('S');

        $this->writeln('test 1 - show name context C');
        $this->writeln($strategyContextC->showBookTitle($book));
        $this->writeln('');

        $this->writeln('test 2 - show name context E');
        $this->writeln($strategyContextE->showBookTitle($book));
        $this->writeln('');

        $this->writeln('test 3 - show name context S');
        $this->writeln($strategyContextS->showBookTitle($book));
        $this->writeln('');



    }

    public  function writeln($line_in) {
        echo $line_in."<br/>";
    }
}
