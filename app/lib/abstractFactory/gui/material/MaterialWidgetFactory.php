<?php

namespace App\lib\abstractFactory\gui\material;

use App\lib\abstractFactory\gui\Button;
use App\lib\abstractFactory\gui\TextBox;
use App\lib\abstractFactory\gui\WidgetFactory;

class MaterialWidgetFactory implements WidgetFactory {

    function createButton(): Button {
        return  new MaterialButton();
    }

    function createTextBox(): TextBox {
       return  new MaterialTextBox();
    }
}
