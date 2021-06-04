<?php

namespace Jumia\Task\Models;

class Customer extends BaseModel
{
    protected $tableName = 'customer';

    /**
     * get all customers from db
     *
     * @return array
     */
    public function getCustomers()
    {
        return $this->pdo->query('select phone from '.$this->tableName)->fetchAll();
    }
}
