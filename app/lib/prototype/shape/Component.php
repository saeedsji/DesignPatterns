<?php

namespace App\lib\prototype\shape;

interface Component {
    function render();
    function clone();
}
