<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table='sizes';
    protected $fillable=['size'];
    /**
     * Xoa ban ghi theo id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function del($id)
    {
    	Size::find($id)->delete();
    }
    /**
     * Lưu dữ liệu vào database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public static function storeData($data)
    {
    	return Size::create($data);
    }
    public static function updateData($id,$data)
    {
    	$size= Size::find($id);
    	$size->update($data);
    	return $size;
    }
}
