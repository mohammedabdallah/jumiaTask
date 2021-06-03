<?php

use Jumia\Task\Database\Connection;
use Jumia\Task\Models\Customer;

require '../vendor/autoload.php';


//get phone numbers via customer model


$model     = new Customer((new Connection)->connect());

$customers = $model->getCustomers();


