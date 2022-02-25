<?php

namespace App\lib\iterator\browser;

class BrowseHistory {
    private array $urls;

    public function push(string $url) {
        $this->urls[] = $url;
    }

    public function pop() {
        $lastIndex = count($this->urls) - 1;
        $lastUrl = $this->urls[$lastIndex];
        unset($this->urls[$lastIndex]);
        return $lastUrl;
    }

    public function getUrls(): array {
        return $this->urls;
    }

}
