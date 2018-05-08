<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table='colors';
    protected $fillable=['name','code','slug'];
    /**
     * Xoa ban ghi theo id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function del($id)
    {
    	Color::find($id)->delete();
    }
    /**
     * Lưu dữ liệu vào database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public static function storeData($data)
    {
    	return Color::create($data);
    }
    public static function updateData($id,$data)
    {
    	$color= Color::find($id);
    	$color->update($data);
    	return $color;
    }
}
