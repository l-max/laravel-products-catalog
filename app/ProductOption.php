<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductOption
 * @package App
 *
 * @property $id
 * @property $name
 */
class ProductOption extends Model
{
    /**
     * @var string
     */
    protected $table = 'product_options';

    /** @var array */
    protected $fillable = ['name'];
}
