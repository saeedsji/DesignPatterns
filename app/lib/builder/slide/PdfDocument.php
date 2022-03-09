<?php

namespace App\lib\builder\slide;

use Illuminate\Support\Facades\Log;

class PdfDocument {
    public function addPage($text) {
        Log::info('Adding a page to PDF text : ' . $text);
    }
}
