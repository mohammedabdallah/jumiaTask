<?php

namespace Jumia\Task\Database;

use Jumia\Task\Config;
use PDO;

class Connection
{
    /**
     * Hold databae instance
     *
     * @var pdo
     */
    private $pdo;

    public function connect()
    {
        if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("sqlite:". Config::PATH_TO_SQLITE_FILE, '', '', [
                    PDO::ATTR_PERSISTENT=>true
                ]);
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
        return $this->pdo;
    }
}
