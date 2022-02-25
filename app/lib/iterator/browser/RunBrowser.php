<?php

namespace App\lib\iterator\browser;

use Illuminate\Support\Facades\Log;

class RunBrowser {
    public function run() {
        $history = new BrowseHistory();
        $history->push('a');
        $history->push('b');
        $history->push('c');

        for ($i = 0; $i < count($history->getUrls()); $i++)
        {
            $urls = $history->getUrls();
            $url = $urls[$i];
            Log::info($url);
        }
    }
}
