<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @mixin \Eloquent
 */
abstract class Model extends EloquentModel
{
    /**
     * @return string
     */
    public static function getTableName()
    {
        return (new static)->getTable();
    }
}
