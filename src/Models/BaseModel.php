<?php
namespace Jumia\Task\Models;

use Jumia\Task\Database\Connection;
use PDO;

abstract class BaseModel
{
    /**
     * instance pdo
     *
     * @var [type]
     */
    protected $pdo;
    /**
     * attribute to hold table name
     *
     * @var string
     */
    protected $tableName;

    public function __construct()
    {
        $this->pdo = (new Connection)->connect();
    }
}
