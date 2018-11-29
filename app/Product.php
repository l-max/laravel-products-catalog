<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 *
 * @property $id
 * @property $art
 * @property $name
 * @property $description
 * @property $category_id
 * @property string $image
 */
class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /** @var array */
    protected $fillable = ['art', 'name', 'description', 'image', 'category_id'];
}
