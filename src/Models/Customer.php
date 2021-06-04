<?php

namespace Jumia\Task\Models;

class Customer extends BaseModel
{
    protected $tableName = 'customer';


    public function getCustomers()
    {
        return $this->pdo->query('select phone from '.$this->tableName)->fetchAll();
    }
}
