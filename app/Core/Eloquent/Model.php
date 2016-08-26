<?php

namespace App\Core\Eloquent;

abstract class Model extends \Eloquent
{
    public static function getTableName() : string
    {
        return (new static)->getTable();
    }
}
