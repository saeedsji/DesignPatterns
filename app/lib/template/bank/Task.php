<?php

namespace App\lib\template\bank;

abstract class Task {

    private AudiTrail $auditTrail;

    public function __construct(AudiTrail $audiTrail) {
        $this->auditTrail = $audiTrail;
    }

    public function execute() {
        $this->auditTrail->record();
    }

    abstract protected function doExecute();
}
