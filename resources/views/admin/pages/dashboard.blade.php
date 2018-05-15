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
              <input name="edit_origin_price" type="number" id="edit_origin_price" class="form-control" placeholder="Origin Price VNĐ" required="true">
            </div>
            <div class="form-group col-sm-6">
              <label for="edit_sale_price">Sale Price</label>
              <input name="edit_sale_price" type="number" id="edit_sale_price" class="form-control" placeholder="Sale Price VNĐ" required="true">
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