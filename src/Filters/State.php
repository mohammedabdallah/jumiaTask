<?php
namespace Jumia\Task\Filters;

class State implements IFilter
{
    public function applyFilter(array &$phones, string $filter): void
    {
        foreach ($phones as $key=>$phone) {
            if (strtolower($phones[$key]['state']) != strtolower($filter)) {
                unset($phones[$key]);
            }
        }
    }
}
