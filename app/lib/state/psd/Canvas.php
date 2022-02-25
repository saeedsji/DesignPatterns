<?php

namespace App\lib\state\psd;

class Canvas {

    private Tool $currentTool;


    public function mouseDown() {
        $this->currentTool->mouseDown();
    }

    public function mouseUp() {
        $this->currentTool->mouseUp();
    }

    public function getCurrentTool(): Tool {
        return $this->currentTool;
    }

    public function setCurrentTool(Tool $currentTool): void {
        $this->currentTool = $currentTool;
    }
}
