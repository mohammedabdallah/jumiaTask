<?php
namespace Jumia\Task\Filters;

interface IFilter
{
    public function applyFilter(array &$data, string $filterValue): void;
}
