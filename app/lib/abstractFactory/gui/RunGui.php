<?php

namespace App\lib\abstractFactory\gui;

use App\lib\abstractFactory\gui\ant\AntWidgetFactory;
use App\lib\abstractFactory\gui\app\ContactForm;
use App\lib\abstractFactory\gui\material\MaterialWidgetFactory;

class RunGui {

    public function run() {
        $contactForm = new ContactForm();
        $contactForm->render(new MaterialWidgetFactory());
        $contactForm->render(new AntWidgetFactory());
    }
}
