@extends('admin/layouts/master')
@section('content')
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Products</h3>
              <a href="{{ asset('/admin/addProduct') }}" type="button" id="add-new" class="btn btn-success btn-xs">Add product</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="product-table"  data-url='{{route("getProducts")}}' class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Origin price</th>
                  <th>Sale price</th>
                  <th>Brand</th>
                  <th>Cateogry</th>
                  <th>Created at</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Sale price</th>
                  <th>Origin price</th>
                  <th>Brand</th>
                  <th>Cateogry</th>
                  <th>Created at</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              {{-- <a class="btn btn-success" data-toggle="modal" href='#add' >Thêm bài viết mới</a> --}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 

  <div class="modal fade" id="show">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="product_name">Product info</h4>
        </div>
        <div class="modal-body">
          <h3 style="color: #969696; font-weight: lighter;" id="product_description"></h3>
          <div id="product_content">
            
          </div>
          <h5 style="color: #ff2626;text-align: right; text-decoration: line-through; font-weight: lighter;" id="product_origin_price">
            
          </h5>
          <h3 style="color: #969696;text-align: right; " id="product_sale_price">
            
          </h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit product infomation</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="edit_name">Product Name</label>
            <input name="edit_name" type="text" id="edit_name" class="form-control" placeholder="Product name" required="true">
            <input type="hidden" name="edit_code" id="edit_code">
          </div>
          <div class="form-group">
            <label for="edit_description">Description</label>
            <textarea name="edit_description" id="edit_description" class="form-control" rows="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="edit_content">Content</label>
            <textarea name="edit_content" id="editor_edit_content"></textarea>
          </div>
          <div class="form-group">

            <label for="edit_brand_id">Brand</label>
            
            <select name="edit_brand_id" id="edit_brand_id" class="form-control" required="required">
              @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="edit_category_id">Category</label>
            
            <select name="edit_category_id" id="edit_category_id" class="form-control" required="required">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="edit_origin_price">Origin Price</label>
              <input name="edit_origin_price" type="number" step="1" id="edit_origin_price" class="form-control" placeholder="Origin Price USD" required="true">
            </div>
            <div class="form-group col-sm-6">
              <label for="edit_sale_price">Sale Price</label>
              <input name="edit_sale_price" type="number" step="1" id="edit_sale_price" class="form-control" placeholder="Sale Price USD" required="true">
            </div>            
          </div>
        
          
        </div>
        <div class="modal-footer">
          <button id="edit-submit"  type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

  <div class="modal fade" id="detail">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="title-detail">Product Details</h4>
        </div>
        <div class="modal-body">
          <table id="product-detail-table"  data-url='' class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Code</th>
              <th>Name</th>
              <th>Size</th>
              <th>Color</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
              <th>#</th>
              <th>Code</th>
              <th>Name</th>
              <th>Size</th>
              <th>Color</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
          <form action="" method="POST" class="form-inline" role="form">
          {{csrf_field()}}<!-- sinh token -->
            <label style="margin-right: 40px;" >Add new items: </label>
            <div class="form-group">
              <label for="add_color_id">Color</label>
              <select name="add_color_id" id="add_color_id" class="form-control" required="required">
                @foreach ($colors as $color)
                  <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
              </select>
            </div>
            <input type="hidden" name="add_code" id="add_code" value="">
            <div class="form-group">
              <label for="add_size_id">Size</label>
              <select name="add_size_id" id="add_size_id" class="form-control" required="required">
                @foreach ($sizes as $size)
                  <option value="{{$size->id}}">{{$size->size}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="add_quantity">Quantity</label>
              <input type="number" name="add_quantity" id="add_quantity" class="form-control" value="" required="required" title="">
            </div>
          
            
          
            <button type="button" class="btn btn-primary" id="btn-add-detail">Add</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

  <div class="modal fade" id="upload">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="title-detail-image"></h4>
        </div>
        <div class="modal-body">
          <form id="images-form" action="" method="POST" class="form-inline" data-url='{{ route('imagesUploadPost') }}' role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-sm-4 form-group">
              <label for="choose_color">Choose Color</label>
              <select name="choose_color" id="choose_color" class="form-control" required="required">
                
                  
                
              </select>
            </div>
            <input type="hidden" name="image_product_id" id="image_product_id" value="">
            <div class="col-sm-6 form-group">
              <label for="">Choose images</label>
              <input  type="file" id="uploadFile" name="uploadFile[]" multiple class="form-control">
            </div>
          
            
          
            <button type="submit" class="btn btn-primary" id="upload_submit" name='submitImage'>Upload</button>
          </form>
          <div class="col-sm-12" id="image_prepare"></div>
          <div class="col-sm-12" id="image_preview"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

@endsection 

{{-- @section('js')
<script src="{{ asset('admin_assets/js/ajax_post.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
  
  CKEDITOR.replace( 'editor_content' );
  CKEDITOR.replace( 'post_edit_content' );
  //CKEDITOR.replace( 'econtent' );
  CKEDITOR.editorConfig = function( config ) {
        // Define changes to default configuration here. For example:
        // config.language = 'fr';
        // config.uiColor = '#AADC6E';
        config.width = '400px';

      };
</script>
@endsection --}}
@section('css')
<style type="text/css" media="screen">
  #add-new{
    margin-left: 30px;
  }
  .table-row td{
    vertical-align: middle !important;
  }
  #image_preview,#image_prepare{
    margin-top: 30px;
  }
  .image-append{
     height:100px; 
     display:inline-block; 
     opacity: 0.8;
     transition: 0.2s;
  }
  .image-append:hover{
    opacity: 1;
  }
  .image-div{
    position: relative;
    display: inline-block;
    box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.15);
    margin-right: 15px; 
    margin-bottom: 15px;
    border-radius: 6px;
  }
  .btn-del-image{
    position: absolute;
    transform: translate(50%, 50%);
    top: -20px ;
    right: 0px ;
    color: #D73925;
    font-size: 20px;
    cursor: pointer;
    background: white;
    border-radius: 50%;
  }
  .btn-menu:hover .btn-text{
    display: inline;
  }
  .btn-text{
    display: none;
    transition: 0.4s;
  }
</style>
@endsection

@section('js')
<script src="{{ asset('admin_assets/js/ajax_product.js') }}"></script>
<script type="text/javascript" charset="utf-8" async defer>
    CKEDITOR.replace( 'editor_edit_content' );
  //CKEDITOR.replace( 'econtent' );
  CKEDITOR.editorConfig = function( config ) {
        // Define changes to default configuration here. For example:
        // config.language = 'fr';
        // config.uiColor = '#AADC6E';
        config.width = '400px';

      };
</script>
{{-- <script>
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getProducts') !!}',
        columns: [
            { data: 'id', name: 'products.id' },
            { data: 'image_link', name: 'image_link' },
            { data: 'code', name: 'products.code' },
            { data: 'name', name: 'products.name' },
            { data: 'origin_price', name: 'products.origin_price' },
            { data: 'sale_price', name: 'products.sale_price' },
            { data: 'brand_name', name: 'products.brand_id' },
            { data: 'category_name', name: 'products.category_id' },
            { data: 'created_at', name: 'products.created_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script> --}}
@endsection