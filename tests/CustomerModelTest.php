<?php 

namespace Tests;

use Jumia\Task\Models\Customer;
use PHPUnit\Framework\TestCase;

class CustomerModelTest extends TestCase{

    /**
     * @test
     */
    public function it_can_get_customers_from_db()
    {
        $customers = (new Customer)->getCustomers();

        $this->assertIsArray($customers);
    }
}