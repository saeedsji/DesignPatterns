<?php

namespace App\lib\template\bank;

class RunBank {
    public function run() {
        $task = new TransferMoneyTask(new AudiTrail());
        $task->execute();
    }
}
