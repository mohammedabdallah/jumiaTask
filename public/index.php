<?php

use Jumia\Task\Controllers\PhonesController;

require '../vendor/autoload.php';


//get phone numbers via customer model


(new PhonesController)->listPhones();

