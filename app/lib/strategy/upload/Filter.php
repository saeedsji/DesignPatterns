<?php

namespace App\lib\strategy\upload;

interface Filter {
    function apply(string $fileName);
}
