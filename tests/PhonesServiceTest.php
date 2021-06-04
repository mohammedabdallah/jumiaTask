<?php
namespace Tests;

use Jumia\Task\ConstantsHelper;
use Jumia\Task\Services\PhoneService;
use PHPUnit\Framework\TestCase;

class PhonesServiceTest extends TestCase{

    private $pohneService;

    public function setUp() : void
    {
        $this->pohneService = new PhoneService;
    }
    /**
     * @test
     */
    public function it_can_get_country_from_given_code()
    {
        $country = $this->pohneService->getCountryFromCode(ConstantsHelper::CAMEROON_CODE);

        $this->assertEquals($country, ConstantsHelper::$countries[ConstantsHelper::CAMEROON_CODE]);
    }

    /**
     * @test
     */
    public function it_return_null_if_county_code_not_defined_from_our_side()
    {
        $country = $this->pohneService->getCountryFromCode(999999999999);

        $this->assertNull($country);
    }

    /**
     * @test
     */
    public function it_return_ok_if_is_valid_phone_number()
    {
        $result = $this->pohneService->isValidPhone('(237) 696443597', ConstantsHelper::CAMEROON_CODE);

        $this->assertEquals('OK', $result);

        $result = $this->pohneService->isValidPhone('(251) 966002259', ConstantsHelper::ETHIOPIA_CODE);

        $this->assertEquals('OK', $result);

        $result = $this->pohneService->isValidPhone('(258) 848826725', ConstantsHelper::MOZAMBIQUE_CODE);

        $this->assertEquals('OK', $result);

        $result = $this->pohneService->isValidPhone('(212) 698054317', ConstantsHelper::MOROCCO_CODE);

        $this->assertEquals('OK', $result);

        $result = $this->pohneService->isValidPhone('(256) 714660221', ConstantsHelper::UGANDA_CODE);

        $this->assertEquals('OK', $result);
    }

    /**
     * @test
     */
    public function it_return_nok_if_phone_not_valid()
    {
        $result = $this->pohneService->isValidPhone('(237) 6780009592', ConstantsHelper::CAMEROON_CODE);

        $this->assertEquals('NOK', $result);

        $result = $this->pohneService->isValidPhone('(251) 9773199405', ConstantsHelper::ETHIOPIA_CODE);

        $this->assertEquals('NOK', $result);

        $result = $this->pohneService->isValidPhone('(258) 84330678235', ConstantsHelper::MOZAMBIQUE_CODE);

        $this->assertEquals('NOK', $result);

        $result = $this->pohneService->isValidPhone('(212) 6007989253', ConstantsHelper::MOROCCO_CODE);

        $this->assertEquals('NOK', $result);

        $result = $this->pohneService->isValidPhone('(256) 7734127498', ConstantsHelper::UGANDA_CODE);

        $this->assertEquals('NOK', $result);
    }
}