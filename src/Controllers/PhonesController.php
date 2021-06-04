<?php

namespace Jumia\Task\Controllers;

use Jumia\Task\ConstantsHelper;
use Jumia\Task\Models\Customer;
use Jumia\Task\Services\PhoneService;

class PhonesController
{
    private $phonesService;
    private $customerModel;

    public function __construct()
    {
        $this->phonesService = new PhoneService();

        $this->customerModel = new Customer;
    }

    public function listPhones()
    {
        $phones = $this->phonesService->filterPhones($_GET, $this->customerModel->getCustomers());

        $countries = ConstantsHelper::$countries;

        require('../views/list-phones.php');
    }
}
