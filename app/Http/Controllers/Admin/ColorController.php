<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;
use Yajra\Datatables\Datatables;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.color');
    }

    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true);
        return Datatables::of(Color::all())
        ->addColumn('action', function ($color) {
            return'
            <button type="button" class="btn btn-xs btn-warning" data-url="'.route('colors.update', $color->id).'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-xs btn-danger" data-id="'.$color->id.'" data-url="'.route('colors.destroy', $color->id).'"><i class="fa fa-trash" aria-hidden="true"></i></button>
            ';
        })
        ->addColumn('color', function ($color) {
            return'<div  style="width:70px;height:70px;border-radius:5px;background-color: '.$color->code.';"><div>';
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        //->editColumn('color', '<div style="width:70px;height:70px;border-radius:5px;background-color: {{$code}};"><div>')
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->setRowId('color-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['action','color'])
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
        return response()->json(['data' => Color::storeData($request->only(['name','code','slug']))], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Color::find($id);
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
        $result = Color::updateData($id,$request->only(['name','code','slug']));
        if($result){
            $color= Color::find($id);
            return response()->json([
                'data'=>$color
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
        Color::del($id);
    }
}
