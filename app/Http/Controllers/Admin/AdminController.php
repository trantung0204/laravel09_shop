<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use \DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.admin');
    }
    public function anyData()
    {
        //return Datatables::of(Product::query())->make(true);
        return Datatables::of(Admin::all())
        ->addColumn('action', function ($admin) {
            return'
            <button type="button" class="btn btn-info btn-avatar" data-url="'.route('admins.updateAvatar',$admin->id).'"data-id="'.$admin->id.'"><i class="fa fa-picture-o" aria-hidden="true"></i> Update Avatar</button>
            ';
            
        })
        ->editColumn('avatar', function ($admin) {
            if (!empty($admin->avatar)) {
                return '<img class="img-responsive center-block" style="width:70px;border-radius:5px;"  src="'.url(Storage::url($admin->avatar)).'" />';
            } else {
                return '<img class="img-responsive center-block" style="width:70px;border-radius:5px;" src="'. asset("admin_assets/dist/img/default-avatar.jpg").'"/>';
            }
        })
        // ->setRowClass(function ($image) {
        //     return $image->id % 2 == 0 ? 'pink' : 'green';
        // })
        //->editColumn('image', '<img src=""/>')
        //->editColumn('brand_id', 'tung{{$category_id}}')
        //->editColumn('category_id', Category::where('id', '=',$category_id)->first()->name)
        ->setRowId('admin-row-{{$id}}')
        ->setRowClass('table-row')
        ->rawColumns(['action','avatar'])
        ->make(true);
    }
    
    public function updateAvatar(Request $request, $id)
    {      

        $link='';
        if($file=$request->file('image')){
                $link = Storage::disk('local')->put('public/avatars', $file);
                DB::table('admins')->where('id', $id)->update(['avatar' => $link]);
        }
        return response()->json(['data' => $link], 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
