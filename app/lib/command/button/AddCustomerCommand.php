<?php

namespace App\lib\command\button;

use App\lib\command\button\fx\Command;

class AddCustomerCommand implements Command {

    private  CustomerService $service;

    public function __construct(CustomerService $service) {
        $this->service = $service;
    }

    public function execute() {
       $this->service->addCustomer();
    }
}
