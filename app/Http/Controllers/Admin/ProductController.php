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
use Illuminate\Support\Facades\Storage;


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
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.pages.dashboard',compact('brands','categories','colors','sizes'));
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
            <button type="button" class="btn btn-xs btn-default btn-detail" data-url="'.route('getProductDetails', $product->code).'" data-code="'.$product->code.'" data-url-add="'.route('addDetail').'"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-info btn-view" data-url="'.route('products.show', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-warning btn-edit" data-url="'.route('products.show', $product->id).'"  data-id="'.$product->id.'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger btn-del" data-url="'.route('products.destroy', $product->id).'" data-id="'.$product->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-success btn-image"  data-url="'.route('listColors', $product->code).'" data-id="'.$product->id.'" data-name="'.$product->name.'"><i class="fa fa-upload" aria-hidden="true"></i> Images</button>
            ';
            
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        // ->editColumn('image_link', '<img class="img-responsive center-block" style="width:70px;" src="{{$images}}"/>')
        ->addColumn('image_link', function (Product $product) {
            if(isset($product->images) && isset($product->images[0])){
                return '<img class="img-responsive center-block" style="width:70px;" src="'.url(Storage::url($product->images[0]->link)).'"/>';
            }else{
                return '<img class="img-responsive center-block" style="width:70px;" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg"/>';
            }
        })
        ->editColumn('origin_price', '{{$origin_price}} USD')
        ->editColumn('sale_price', '{{$sale_price}} USD')
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
            <button type="button" class="btn btn-xs btn-info btn-quantity" id="plus" data-url="'.route('quantityIncrement', [$productDetail->id,1]).'" data-id="'.$productDetail->id.'"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-info btn-quantity" id="sub" data-url="'.route('quantityIncrement', [$productDetail->id,0]).'" data-id="'.$productDetail->id.'"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger btn-del-detail" data-url="'.route('delProductDetail', $productDetail->id).'" data-id="'.$productDetail->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
            ';
            
        })
        ->editColumn('color_name', '<i style="color:{{$color_code}};text-shadow: 1px 1px 1px #000000;" class="fa fa-circle" aria-hidden="true"></i>  {{$color_name}}  ')
        ->setRowId('product-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['color_name','action'])
        ->make(true);
    }
    // public function getColor($code)
    // {
    //     //return Datatables::of(Product::query())->make(true);
    //     //
    //     $productColors = DB::table('product_details')
    //                         ->where('product_id', '=', $code)
    //                         ->join('colors', 'product_details.color_id', '=', 'colors.id')
    //                         ->join('products', 'product_details.product_id', '=', 'products.code')
    //                         ->select('product_details.code','products.name as product_name', 'colors.name as color_name','colors.code as color_code')
    //                         ->groupBy('color_name')
    //                         ->get();

    //     return Datatables::of($productColors)
    //     ->addColumn('action', function ($productColors) {
    //         return'
    //         <button type="button" class="btn btn-xs btn-info btn-quantity" data-url="" data-id="'.$productColors->id.'"><i class="fa fa-file-image-o" aria-hidden="true"></i></button>
    //         ';
            
    //     })
    //     ->editColumn('color_name', '<i style="color:{{$color_code}};text-shadow: 1px 1px 1px #000000;" class="fa fa-circle" aria-hidden="true"></i>  {{$color_name}}  ')
    //     ->setRowId('product-row-{{$id}}')
    //     ->setRowClass('table-row')
    //     ->rawColumns(['color_name','action'])
    //     ->make(true);
    // }
    public function quantityIncrement($id,$i)
    {
        // DB::table('product_details')
        // ->where('id', $id)
        // ->update([
        //    'quantity' => DB::raw('quantity + 1')
        // ]);
        if ($i==1) {
            DB::table('product_details')->where('id', $id)->increment('quantity');
        }else{
            if (DB::table('product_details')->where('id', $id)->first()->quantity<=1) {
                ProductDetail::del($id);
            }else{
                DB::table('product_details')->where('id', $id)->decrement('quantity');
            }
        }
    }
    public function create()
    {
        //
    }
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

    public function show($id)
    {
        return Product::find($id);
    }

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

    public function destroy($id)
    {
        $x= DB::table('products')->where('id','=',$id)->first();
        DB::table('product_details')->where('product_id', '=', $x->code)->delete();
        //ProductDetail::del($x->code);
        Product::del($id);
    }
    public function delProductDetail($id)
    {
        ProductDetail::del($id);
    }
    public function addDetail(Request $request)
    {
        $details = DB::table('product_details')->where('product_id', $request->product_id)->where('color_id', $request->color_id)->where('size_id', $request->size_id)->first();

        //return response()->json(['data' => $details], 200);


        if (empty($details)) {
            return response()->json(['data' => ProductDetail::storeData($request->only(['product_id','color_id','size_id','quantity']))], 200);
        }else{
            DB::table('product_details')->where('product_id', $request->product_id)->where('color_id', $request->color_id)->where('size_id', $request->size_id)->increment('quantity',$request->quantity);
        }
    }
    public function getColors($code)
    {
        $colors= DB::table('product_details')->where('product_id', '=', $code)
                                    ->join('colors', 'product_details.color_id', '=', 'colors.id')
                                    ->select('product_details.color_id as color_id','colors.name as color_name')
                                    ->distinct('color_id')
                                    ->get();
        return response()->json([
                'data'=>$colors
            ], 200);
    }

    // public function imagesUpload()
    // {
    //     return view('imagesUpload');
    // }

    // public function imagesUploadPost(Request $request)
    // {
    //     request()->validate([
    //         'uploadFile' => 'required',
    //     ]);

    //     foreach ($request->file('uploadFile') as $key => $value) {
    //         $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
    //         $value->move(public_path('images'), $imageName);
    //     }
    //     return response()->json(['success'=>'Images Uploaded Successfully.']);
    // }
     public function imagesUploadPost(Request $request)
    {      

        $data = array();
        $images=array();
        if($files=$request->file('image')){
            foreach($files as $key =>$file){
                $temp = [];
                // $temp['link'] = $file->store('images');
                $temp['link'] = Storage::disk('local')->put('public/images', $file);
                $temp['color_id'] = $request['color_id'];
                $temp['product_id'] = $request['product_id'];
                Image::storeData($temp);
            }
        }
        return response()->json(['data' => $images], 200);
    }
}
