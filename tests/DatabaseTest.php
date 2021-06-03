<?php
namespace Tests;

use Error;
use Jumia\Task\Database\Connection;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{

    /**
     * @test
     */
    public function it_can_connect_to_database()
    {
        $connection = (new Connection())->connect();

        $this->assertInstanceOf('pdo', $connection);
    }
}
