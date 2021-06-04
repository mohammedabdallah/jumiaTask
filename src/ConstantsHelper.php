<?php
namespace Jumia\Task;

class ConstantsHelper
{
    const MOZAMBIQUE_CODE = 258;
    const CAMEROON_CODE   = 237;
    const MOROCCO_CODE    = 212;
    const UGANDA_CODE     = 256;
    const ETHIOPIA_CODE   = 251;

    public static $countries = [
        self::CAMEROON_CODE => 'MOZAMBIQUE',
        self::MOROCCO_CODE => 'MOROCCO',
        self::MOZAMBIQUE_CODE => 'MOZAMBIQUE',
        self::UGANDA_CODE => 'UGANDA',
        self::ETHIOPIA_CODE => 'ETHIOPIA',
    ];

    public static $countriesRegex = [
        self::CAMEROON_CODE => '/\(237\)\ ?[2368]\d{7,8}$/',
        self::MOROCCO_CODE => '/\(212\)\ ?[5-9]\d{8}$/',
        self::MOZAMBIQUE_CODE => '/\(258\)\ ?[28]\d{7,8}$/',
        self::UGANDA_CODE => '/\(256\)\ ?\d{9}$/',
        self::ETHIOPIA_CODE => '/\(251\)\ ?[1-59]\d{8}$/',
    ];
}
