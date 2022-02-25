<?php

namespace App\lib\template\bank;

use Illuminate\Support\Facades\Log;

class GenerateReportTask {
    private AudiTrail $auditTrail;

    public function __construct(AudiTrail $audiTrail) {
        $this->auditTrail = $audiTrail;
    }

    protected function execute() {
        $this->auditTrail->record();
        Log::info('Generate Report');
    }
}
