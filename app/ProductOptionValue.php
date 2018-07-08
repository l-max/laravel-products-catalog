<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductOptionValue
 * @package App
 *
 * @property $id
 * @property $option_id
 * @property $product_id
 * @property $value
 */
class ProductOptionValue extends Model
{
    /**
     * @var string
     */
    protected $table = 'product_options_values';

    /** @var array */
    protected $fillable = ['value'];
}
