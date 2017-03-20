<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    /**
     * @return string
     */
    public static function getTableName()
    {
        return (new static)->getTable();
    }
}
