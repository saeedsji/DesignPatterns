<?php

namespace App\lib\facade\notif;

class Message {
    private $content;
    public function __construct($content) {
        $this->content = $content;
    }
}
