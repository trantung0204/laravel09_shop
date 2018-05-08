<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brands';
    protected $fillable=['name','slug'];
    /**
     * Xoa ban ghi theo id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function del($id)
    {
    	Brand::find($id)->delete();
    }
    /**
     * Lưu dữ liệu vào database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public static function storeData($data)
    {
    	return Brand::create($data);
    }
    public static function updateData($id,$data)
    {
    	$brand= Brand::find($id);
    	$brand->update($data);
    	return $brand;
    }
}
