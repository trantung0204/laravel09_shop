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
use \DB;
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
        $brands=Brand::all();
        $categories=Category::all();
        return view('admin.pages.dashboard',compact('brands','categories'));
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
                            ->join('brands', 'products.brand_id', '=', 'brands.id');

        return Datatables::of($products)
        ->addColumn('action', function ($product) {
            return'
            <button type="button" class="btn btn-xs btn-default btn-detail" data-url="'.route('getProductDetails', $product->code).'" data-code="'.$product->code.'"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-info" data-url="'.route('products.show', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-warning" data-url="'.route('products.show', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger" data-url="'.route('products.destroy', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                return '<img class="img-responsive center-block" style="width:70px;" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg"/>';
            }
        })
        ->editColumn('origin_price', '{{$origin_price}} VNĐ')
        ->editColumn('sale_price', '{{$sale_price}} VNĐ')
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['image_link','action'])
        ->make(true);
    }
    public function getDetail($code)
    {
        //return Datatables::of(Product::query())->make(true);
        //
        $productDetails = DB::table('product_details')
                            ->where('product_id', '=', $code)
                            ->join('colors', 'product_details.color_id', '=', 'colors.id')
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.id')
                            ->join('products', 'product_details.product_id', '=', 'products.code')
                            ->select('product_details.*', 'colors.name as color_name','colors.code as color_code', 'sizes.size as size_name', 'products.name as product_name')
                            ->get();

        return Datatables::of($productDetails)
        ->addColumn('action', function ($productDetail) {
            return'
            <button type="button" class="btn btn-xs btn-info" id="plus" data-url="" data-id="'.$productDetail->id.'"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-info" id="sub" data-url="" data-id="'.$productDetail->id.'"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger" data-url="" data-id="'.$productDetail->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
            ';
            
        })
        ->editColumn('color_name', '<i style="color:{{$color_code}};text-shadow: 1px 1px 1px #000000;" class="fa fa-circle" aria-hidden="true"></i>  {{$color_name}}  ')
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['color_name','action'])
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
        $productData=array();
        $productData['code']="SP".time();
        $productData['name']=$request->name;
        $productData['origin_price']=$request->origin_price;
        $productData['sale_price']=$request->sale_price;
        $productData['description']=$request->description;
        $productData['content']=$request->content;
        $productData['slug']=str_slug($request->name, '-');
        $productData['brand_id']=$request->brand_id;
        $productData['category_id']=$request->category_id;
        Product::create($productData);
        $numOfColor=Color::orderBy('id', 'desc')->first()->id;
        $numOfSize=Size::orderBy('id', 'desc')->first()->id;
        for ($i=1; $i <= $numOfSize; $i++) { 
            for ($j=1; $j <=$numOfColor ; $j++) { 
                if (($request->input('quantity-'.$i.'-'.$j)!=null)&&($request->input('quantity-'.$i.'-'.$j))>0) {
                    $productDetailData=array();
                    $productDetailData['product_id']=$productData['code'];
                    $productDetailData['color_id']=$j;
                    $productDetailData['size_id']=$i;
                    $productDetailData['quantity']=$request->input('quantity-'.$i.'-'.$j);
                    ProductDetail::create($productDetailData);
                    //dd($productDetailData);
                    
                }
            }
        }
        //dd($productData);
        return redirect('admin/products');
        //dd($numOfColor);
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
        $result = Product::updateData($id,$request->only(['name','slug','code','description','content','origin_price','sale_price','brand_id','category_id',]));
        if($result){
            $category= Product::find($id);
            return response()->json([
                'data'=>$category
            ], 200);
        }else{
            return response()->json( 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x= DB::table('products')->where('id','=',$id)->first();
        DB::table('product_details')->where('product_id', '=', $x->code)->delete();
        //ProductDetail::del($x->code);
        Product::del($id);
    }
}
