<?php

namespace App\Core\Eloquent;

abstract class Model extends \Eloquent
{
    public static function getTableName()
    {
        return (new static)->getTable();
    }
}
