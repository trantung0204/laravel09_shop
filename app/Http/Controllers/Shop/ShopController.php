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
        return view('shop.pages.home',compact('brands','categories','colors','sizes','products','nike','jordan','adidas','bitis','puma'));
    }
    public function categoryList()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('shop.pages.listing',compact('brands','categories','colors','sizes'));
    }
    public function product()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('shop.pages.product',compact('brands','categories','colors','sizes'));
    }
}
