<?php

namespace App\lib\singleton\config;

class ConfigManager {

    private function __construct() {}

    private array $setiings = [];
    private static  $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new ConfigManager();
        }
        return self::$instance;
    }

    public function set(string $key, $value) {
        $this->setiings[$key] = $value;
    }

    public function get(string $key) {
        return !empty($this->setiings[$key]) ? $this->setiings[$key] : null;
    }

}
