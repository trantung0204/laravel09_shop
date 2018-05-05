@extends('admin/layouts/master')
@section('content')
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="product-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Sale price</th>
                  <th>Brand</th>
                  <th>Cateogry</th>
                  <th>Created at</th>
                  <th>Action</th>
                </tr>
                </thead>
              </table>
              {{-- <a class="btn btn-success" data-toggle="modal" href='#add' >Thêm bài viết mới</a> --}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 

  {{-- <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Thêm mới bài viết</h4>
        </div>
        <div class="modal-body">
        <form id="add-new"  method="POST" role="form"  data-url='{{route("posts.store")}}' >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" id="title" class="form-control" placeholder="Post title" required="true">
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input name="thumbnail" type="file" id="thumbnail" class="form-control" placeholder="Input field" required="true">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="editor_content"></textarea>
          </div>
          <div class="form-group">
            <label for="category_id">Category id</label>
            <input name="category_id" type="text" id="category_id" class="form-control" placeholder="Post title" required="true">
            <select name="category_id" id="category_id" class="form-control" required="required">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label id="tag-label" for="tag">Tag</label>
            <input name="tag" type="text" id="tag" class="form-control" placeholder="add tag" required="true"  data-role="tagsinput">
          </div>
        
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sửa bài viết</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" id="post-edit-title" class="form-control" placeholder="Post title" required="true" value="">
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input name="thumbnail" type="file" id="post-edit-thumbnail" class="form-control" placeholder="Input field" value="">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="post-edit-description" class="form-control" rows="3" required="required"></textarea value="">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="post_edit_content"></textarea>
          </div>
          <div class="form-group">
            <label for="category_id">Category id</label>
            <!-- <input name="category_id" type="text" id="category_id" class="form-control" placeholder="Post title" required="true"> -->
            <select name="category_id" id="post-edit-category_id" class="form-control" required="required">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
        
          
        </div>
        <div class="modal-footer">
          <button id="edit-submit"  type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}


  {{-- <div class="modal fade" id="show">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="title-detail"></h4>
        </div>
        <div class="modal-body">
          <div class="col-md-8">
            <img id="thumbnail-detail"  class="col-md-6 col-md-offset-3 center-block  img-responsive"  src="" alt="">
          </div>
          <div style="margin: 20px 15px; font-weight: bold" id="description-detail" >
            
          </div>
          <div style="margin: 20px 15px;" id="content-detail" >
            
          </div>
          <small style="float: right;" id="date-detail"></small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}

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
  #tag-label{
    display: block;
  }
  .bootstrap-tagsinput{
    display: block;
    border-radius: 0px;
  }
</style>
@endsection

@section('js')

<script>
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getProducts') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'sale_price', name: 'sale_price' },
            { data: 'brand_id', name: 'brand_id' },
            { data: 'category_id', name: 'category_id' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script>
@endsection