<?php

namespace App\lib\abstractFactory\gui\app;

use App\lib\abstractFactory\gui\ant\AntButton;
use App\lib\abstractFactory\gui\ant\AntTextBox;
use App\lib\abstractFactory\gui\material\MaterialButton;
use App\lib\abstractFactory\gui\material\MaterialTextBox;
use App\lib\abstractFactory\gui\Theme;
use App\lib\abstractFactory\gui\WidgetFactory;

class ContactForm {

    public function render(WidgetFactory $factory) {
        $factory->createTextBox()->render();
        $factory->createButton()->render();
    }
}
