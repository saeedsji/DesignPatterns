<?php

namespace App\lib\observer\dataSource;

class RunDataSource {

    public function run() {
        $dataSource = new DataSource();
        $sheet1 = new SpreadSheet();
        $sheet2 = new SpreadSheet();
        $chart = new Chart();
        $dataSource->addObserver($sheet1);
        $dataSource->addObserver($sheet2);
        $dataSource->addObserver($chart);

        $dataSource->setValue(1);
    }
}
