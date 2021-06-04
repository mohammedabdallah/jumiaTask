<?php

namespace Jumia\Task\Filters;

class Country implements IFilter
{
    public function applyFilter(array &$phones, string $filter): void
    {
        foreach ($phones as $key=>$phone) {
            if ($phones[$key]['country'] != $filter) {
                unset($phones[$key]);
            }
        }
    }
}
