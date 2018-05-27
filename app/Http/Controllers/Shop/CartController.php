<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use App\Size;
use App\ProductDetail;
use App\Image;
use \DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function testCart(){
    	//Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large','code' => 'SP98797','color' => 'black','image' => 'abc.jpg']]);
    	// Cart::remove('cdf2a8279f532f52aa64b05b9fce0003');
    	// Cart::destroy();
    	// $item=Cart::content()->where('id', 15);
    	// if(!$item->isEmpty()){
    	// 	return $item;
    	// }
    	// $item=Cart::content()->where('id', 15);
    	// return $item;
    	return Cart::content();
    }
    public function addProduct(Request $request)
    {
    	// $product=DB::table('products')->where('code',$request->product_code)->first();
    	$productDetail=DB::table('product_details')
                            ->where('product_id', '=', $request->product_code)
                            ->where('size_id', '=', $request->size_id)
                            ->where('color_id', '=', $request->color_id)
                            ->join('colors', 'product_details.color_id', '=', 'colors.id')
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                            ->join('products', 'product_details.product_id', '=', 'products.code')
                            ->select('product_details.*', 'colors.name as color_name','colors.code as color_code', 'sizes.size as size_name', 'products.name as product_name', 'products.sale_price as product_price', 'products.id as product_id')
                            ->first();
        $image=DB::table('images')->where('product_id',$productDetail->product_id)->where('color_id',$request->color_id)->first();
		Cart::add(['id' => $productDetail->id, 'name' => $productDetail->product_name, 'qty' => $request->quantity, 'price' => $productDetail->product_price, 'options' => ['size' => $productDetail->size_name,'productCode' => $request->product_code,'color' => $productDetail->color_name,'image' => $image->link]]);
		// Cart::content()->where('id', $product->id);
    		
    }
    public function getCart()
    {
    	return Cart::content();
    }
    public function delItem($rowId)
    {
    	Cart::remove($rowId);
    }
    public function editItem(Request $request,$rowId)
    {
    	Cart::update($rowId, $request->qty);
    }
}
