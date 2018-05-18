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
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('shop.pages.home',compact('brands','categories','colors','sizes'));
    }
}
