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

    /**
     * list phone entry point
     *
     * @return void
     */
    public function listPhones(): void
    {
        $phones = $this->phonesService->buildPhonesPayload($this->customerModel->getCustomers());
        
        $filterdPhones = $this->phonesService->filterPhones($_GET, $phones);
        
        $countries = ConstantsHelper::$countries;

        require('../views/list-phones.php');
    }
}
