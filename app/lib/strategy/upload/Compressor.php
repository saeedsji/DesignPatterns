<?php

namespace App\lib\strategy\upload;

interface Compressor {

    function compress(string $fileName);

}
