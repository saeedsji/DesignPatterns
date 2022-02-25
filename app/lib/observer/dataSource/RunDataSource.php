<?php

namespace App\lib\observer\dataSource;

class RunDataSource {

    public function run() {
        $dataSource = new DataSource();
        $sheet1 = new SpreadSheet($dataSource);
        $sheet2 = new SpreadSheet($dataSource);
        $chart = new Chart($dataSource);
        $dataSource->addObserver($sheet1);
        $dataSource->addObserver($sheet2);
        $dataSource->addObserver($chart);

        $dataSource->setValue(22);
    }
}
