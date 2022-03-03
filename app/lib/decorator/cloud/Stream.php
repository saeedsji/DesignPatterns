<?php

namespace App\lib\decorator\cloud;

interface Stream {
    function write(string $data);
}
