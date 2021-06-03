<?php

namespace Jumia\Task\Models;

use PDO;

class Customer
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    private $tableName = 'customer';


    public function getCustomers()
    {
        return $this->pdo->query('select phone from '.$this->tableName)->fetch();
    }
}
