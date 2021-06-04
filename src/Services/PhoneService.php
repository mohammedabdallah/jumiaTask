<?php

namespace Jumia\Task\Services;

use Jumia\Task\ConstantsHelper;

class PhoneService {

    /**
     * phones with it's details
     *
     * @var array
     */
    public $phones = [];

    /**
     * function to build phones table data as (country,state,code,phone)
     *
     * @param array $filters
     * @param array $phones
     * @return void
     */
    public function filterPhones(array $filters, array $phones): array
    {
        foreach($phones as $key=>$phone)
        {
            $this->phones[$key]['phone'] = $phone['phone'];

            $this->phones[$key]['code'] = $this->getCodeFromPhone($this->phones[$key]['phone']);

            $this->phones[$key]['country'] = $this->getCountryFromCode(
                $this->phones[$key]['code']
            );

            $this->phones[$key]['state'] = $this->isValidPhone($this->phones[$key]['phone'], $this->phones[$key]['code']);
        }
        
        return $this->phones;
    }

    /**
     * get code from given phone
     *
     * @param string $phone
     * @return integer
     */
    private function getCodeFromPhone(string $phone): int
    {
        preg_match('#\((.*?)\)#', $phone, $result);

        return (int) $result[1];
    }

    /**
     * get country name from gived code
     *
     * @param integer $code
     * @return string|null
     */
    private function getCountryFromCode(int $code): ?string
    {
        if(in_array($code, ConstantsHelper::$countries)){
            return ConstantsHelper::$countries[$code];
        }

        return false;
    }

    private function isValidPhone(string $phone, int $code): string
    {
        if(preg_match(ConstantsHelper::$countriesRegex[$code],$phone))
        {
            return 'OK';
        }

        return 'NOK';
    }
}