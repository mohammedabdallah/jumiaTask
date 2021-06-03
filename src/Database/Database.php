<?php

namespace Jumia\Task\Database;

use Jumia\Task\Config;
use PDO;

class Database
{
    /**
     * Hold databae instance
     *
     * @var [type]
     */
    private $pdo;

    public function connect()
    {
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("sqlite:". Config::PATH_TO_SQLITE_FILE);
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }

        return $this->pdo;
    }
}
