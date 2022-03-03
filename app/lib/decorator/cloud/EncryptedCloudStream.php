<?php

namespace App\lib\decorator\cloud;

class EncryptedCloudStream implements Stream {

    private Stream $stream;

    public function __construct(Stream $stream) {
        $this->stream = $stream;
    }

    public function write($data) {
      $encrypted = $this->encrypt($data);
      $this->stream->write($encrypted);
    }

    private function encrypt($data)
    {
        return encrypt($data);
    }

}
