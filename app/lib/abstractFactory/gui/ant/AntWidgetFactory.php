<?php

namespace App\lib\abstractFactory\gui\ant;

use App\lib\abstractFactory\gui\Button;
use App\lib\abstractFactory\gui\TextBox;
use App\lib\abstractFactory\gui\WidgetFactory;

class AntWidgetFactory implements WidgetFactory {

    function createButton(): Button {
        return  new AntButton();
    }

    function createTextBox(): TextBox {
       return new AntTextBox();
    }
}
