<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 *
 * @property $id
 * @property $name
 * @property $parent_id
 */
class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';

    /** @var array */
    protected $fillable = ['name'];
}
