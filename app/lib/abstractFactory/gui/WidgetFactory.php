<?php

namespace App\lib\abstractFactory\gui;

interface WidgetFactory {

    function createButton(): Button;
    function createTextBox(): TextBox;

}
