<?php

namespace Jumia\Task\Filters;

class Country implements IFilter
{
    public function applyFilter(array &$phones, string $filter): void
    {
        foreach ($phones as $key=>$phone) {
            if (strtolower($phones[$key]['country']) != strtolower($filter)) {
                unset($phones[$key]);
            }
        }
    }
}
