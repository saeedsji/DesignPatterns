<?php

namespace App\lib\command\button;

use App\lib\command\button\fx\Button;

class RunButton {
    public function run() {
       $service = new CustomerService();
       $command = new AddCustomerCommand($service);
       $button = new Button($command);
       $button->click();
    }
}
