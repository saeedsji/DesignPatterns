<?php

namespace App\lib\state\psd;

class RunPsd {

    public function run() {
        $canvas = new Canvas();
//        $canvas->setCurrentTool(new SelectionTool());
//        $canvas->setCurrentTool(new BrushTool());
        $canvas->setCurrentTool(new EraserTool());
        $canvas->mouseDown();
        $canvas->mouseUp();
    }
}
