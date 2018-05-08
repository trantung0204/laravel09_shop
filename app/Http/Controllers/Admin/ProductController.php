<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use App\Size;
use App\ProductDetail;
use App\Image;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products=Product::all();
        //$categories=Category::all();
        return view('admin.pages.dashboard');
    }
    public function addForm()
    {
        $brands=Brand::all();
        $categories=Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.pages.addProduct',compact('brands','categories','colors','sizes'));
    }
    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true);
        //
        $products = Product::with('images')->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
                            ->join('categories', 'products.category_id', '=', 'categories.id')
                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                            ->orderBy('products.id', 'desc');

        return Datatables::of($products)
        ->addColumn('action', function ($product) {
            return'
            <button type="button" class="btn btn-xs btn-info" data-id="'.$product->id.'"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-warning" data-id="'.$product->id.'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger" data-id="'.$product->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
            ';
            
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        // ->editColumn('image_link', '<img class="img-responsive center-block" style="width:70px;" src="{{$images}}"/>')
        ->addColumn('image_link', function (Product $product) {
            if(isset($product->images) && isset($product->images[0])){
                return '<img class="img-responsive center-block" style="width:70px;" src="'.$product->images[0]->link.'"/>';
            }else{
                return "";
            }
        })
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['image_link','action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::del($id);
    }
}
