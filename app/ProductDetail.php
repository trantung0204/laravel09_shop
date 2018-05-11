<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table='product_details';
    protected $fillable=['product_id','color_id','size_id','quantity'];
}
