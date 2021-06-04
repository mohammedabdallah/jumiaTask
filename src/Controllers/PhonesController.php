<?php

namespace Jumia\Task\Controllers;

use Jumia\Task\Database\Connection;
use Jumia\Task\Models\Customer;
use Jumia\Task\Services\PhoneService;

class PhonesController
{

    private $phonesService, $customerModel, $connection;

    public function __construct()
    {
        $this->phonesService = new PhoneService();

        $this->connection = new Connection();

        $this->customerModel = new Customer($this->connection->connect());
    }

    public function listPhones()
    {
        $phones = $this->phonesService->filterPhones($_GET, $this->customerModel->getCustomers());

        require ('../views/list-phones.php');
    }
}
