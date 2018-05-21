<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['code','name','origin_price','sale_price','description','content','slug','brand_id','category_id','status'];

    /**
     * Xoa ban ghi theo id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function del($id)
    {
    	Product::find($id)->delete();
    }
    /**
     * Lưu dữ liệu vào database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public static function storeData($data)
    {
    	return Product::create($data);

    	/*cách khác*/
    	/*$product = new Product;
    	$product->name=$data['name'];
    	$product->price=$data['price'];
    	$product->save();
    	return $product;*/
    }
    public static function updateData($id,$data)
    {
    	$product= Product::find($id);
    	$product->update($data);
    	return $product;
    }
    public function category()
    {
    	return $this->belongsTo('App\Category','id','category_id');
    }
    public function brand()
    {
    	return $this->belongsTo('App\Brand','brand_id','id');
    }
    public function images()
    {
    	return $this->hasMany('App\Image','product_id', 'id');
    }
    public function firstImage()
    {
        return $this->images()->first();
    }
    // public function user()
    // {
    // 	return $this->belongsTo('App\User','user_id','id');
    // }
}
