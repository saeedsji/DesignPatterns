<?php

namespace App\lib\decorator\cloud;

class CompressedCloudSream implements Stream {
    private Stream $stream;

    public function __construct(Stream $stream) {
        $this->stream = $stream;
    }

    public function write($data) {
        $compressed = $this->compress($data);
        $this->stream->write($compressed);
    }

    private function compress($data) {
        return substr($data, 0, 3);
    }
}
