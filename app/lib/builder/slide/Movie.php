<?php

namespace App\lib\builder\slide;

use Illuminate\Support\Facades\Log;

class Movie {
    public function addFrame($text, int $duration) {
        Log::info('Adding a frame to the movie text:' . $text . ' duration: ' . $duration);
    }
}
