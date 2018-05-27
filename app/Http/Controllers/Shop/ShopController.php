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

class ShopController extends Controller
{
    public function index()
    {
        $products=Product::orderBy('id','desc')->paginate(8);
        $nike=Product::where('slug','like', '%nike%')->first();
        $jordan=Product::where('slug','like', '%jordan%')->first();
        $adidas=Product::where('brand_id', 3)->first();
        $bitis=Product::where('brand_id', 1)->first();
        $puma=Product::where('brand_id', 9)->first();
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        $carts=Cart::content();
        $countCarts=Cart::count();
        $subtotalCarts=Cart::subtotal();
        return view('shop.pages.home',compact('brands','categories','colors','sizes','products','nike','jordan','adidas','bitis','puma','carts','countCarts','subtotalCarts'));
    }
    public function categoryList($slug)
    {
        $brands=Brand::all();
        $categories=Category::all();
        $category_name=Category::where('slug',$slug)->first()->name;
        $category=Category::where('slug',$slug)->first();
        $categoryProducts=Product::where('category_id',$category->id)->get();
        $colors=Color::all();
        $sizes=Size::all();
        $carts=Cart::content();
        $countCarts=Cart::count();
        $subtotalCarts=Cart::subtotal();
        return view('shop.pages.listing',compact('brands','categories','colors','sizes','category','categoryProducts','category_name','carts','subtotalCarts','countCarts'));
    }
    public function brandList($slug)
    {
        $brands=Brand::all();
        $categories=Category::all();
        $brand_name=Brand::where('slug',$slug)->first()->name;
        $brand=Brand::where('slug',$slug)->first();
        $brandProducts=Product::where('brand_id',$brand->id)->get();
        $colors=Color::all();
        $sizes=Size::all();
        $carts=Cart::content();
        $countCarts=Cart::count();
        $subtotalCarts=Cart::subtotal();
        return view('shop.pages.listing',compact('brands','categories','colors','sizes','brand','brandProducts','brand_name','carts','subtotalCarts','countCarts'));
    }
    public function showProduct($slug)
    {
        $product=Product::where('slug',$slug)->first();
        $previousProduct = Product::where('id', '<', $product->id)->max('id');
        $previousProduct=Product::where('id',$previousProduct)->first();
        //dd($previousProduct );
        $nextProduct = Product::where('id', '>', $product->id)->min('id');
        $nextProduct=Product::where('id',$nextProduct)->first();
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        $productImages=DB::table('images')->where('product_id',$product->id)->get();
        $productSizes=DB::table('product_details')->where('product_id', '=', $product->code)
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                            ->select('product_details.size_id as size_id','sizes.size as size_number')
                            ->distinct('size_id')
                            ->get();
        $productColors=DB::table('product_details')->where('product_id', '=', $product->code)
                            ->join('colors', 'product_details.color_id', '=', 'colors.id')
                            ->select('product_details.color_id as color_id','colors.code as color_code')
                            ->distinct('color_id')
                            ->get();
        $categoryProducts=Product::where('category_id',$product->category_id)->get();
        $carts=Cart::content();
        $subtotalCarts=Cart::subtotal();
        $countCarts=Cart::count();
        return view('shop.pages.product',compact('brands','categories','colors','sizes','product','productSizes','productColors','productImages','nextProduct','previousProduct','categoryProducts','carts','subtotalCarts','countCarts'));
    }
    public function checkOut()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $carts=Cart::content();
        $subtotalCarts=Cart::subtotal();
        $totalCarts=Cart::total();
        $taxCarts=Cart::tax();
        $countCarts=Cart::count();
        return view('shop.pages.checkout',compact('brands','categories','carts','subtotalCarts','countCarts','taxCarts','totalCarts'));
    }
    public function productModal($code)
    {
        $data=array();
        $data['product']= DB::table('products')->where('code',$code)->first();
        $data['image']= DB::table('images')->where('product_id',$data['product']->id)->first()->link;
        $data['sizes']=DB::table('product_details')->where('product_id', '=', $code)
                                        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                                        ->select('product_details.size_id as size_id','sizes.size as size_number')
                                        ->distinct('size_id')
                                        ->get();
        $data['colors']= DB::table('product_details')->where('product_id', '=', $code)
                                        ->join('colors', 'product_details.color_id', '=', 'colors.id')
                                        ->select('product_details.color_id as color_id','colors.code as color_code')
                                        ->distinct('color_id')
                                        ->get();
        return response()->json([
                'data'=>$data
            ], 200);
    }
    public function getImageByColor($id,$color_id)
    {
        $src= DB::table('images')->where('product_id',$id)->where('color_id',$color_id)->first()->link;
        return response()->json([
                'data'=>$src
            ], 200);
    }
    public function getSizeByColor($code,$color_id)
    {
        $sizes= DB::table('product_details')->where('product_id', '=', $code)
                            ->where('color_id', '=', $color_id)
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                            ->select('product_details.size_id as size_id','sizes.size as size_number')
                            ->distinct('size_id')
                            ->get();
	    return response()->json([
                'data'=>$sizes
        ], 200);
    }
}
