<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table='product_details';
    protected $fillable=['product_id','color_id','size_id','quantity'];

    // public static function del($code)
    // {
    // 	ProductDetail::where('product_id','=',$code)->get()->delete();
    // }
    public static function del($id)
    {
    	ProductDetail::find($id)->delete();
    }
    public static function storeData($data)
    {
        return ProductDetail::create($data);
    }
}
