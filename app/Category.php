<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['name','slug','parent_id'];
    /**
     * Xoa ban ghi theo id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function del($id)
    {
    	Category::find($id)->delete();
    }
    /**
     * Lưu dữ liệu vào database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public static function storeData($data)
    {
    	return Category::create($data);
    }
    public static function updateData($id,$data)
    {
    	$category= Category::find($id);
    	$category->update($data);
    	return $category;
    }
}
