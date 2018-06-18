@extends('admin/layouts/master')
@section('content')
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="admin-table" data-url="{{route('getAdmins')}}" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Avatar</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Avatar</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                </tfoot>
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

  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit user profile</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="col-sm-4 col-offset-4 centered">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" id="post-edit-title" class="form-control" placeholder="Post title" required="true" value="">
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

  <div class="modal fade" id="upload">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="title-detail-image"></h4>
        </div>
        <div class="modal-body">
          <form id="images-form" action="" method="POST" class="form-inline" data-url='' role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- <div class="col-sm-4 form-group">
              <label for="choose_color">Choose Color</label>
              <select name="choose_color" id="choose_color" class="form-control" required="required">
                
                  
                
              </select>
            </div>
            <input type="hidden" name="image_product_id" id="image_product_id" value=""> --}}
            <div class="col-sm-6 form-group">
              <label for="">Choose images</label>
              <input  type="file" id="uploadFile" name="uploadFile" class="form-control">
            </div>
          
            
          
            <button type="submit" class="btn btn-primary" id="upload_submit" name='submitImage'>Upload</button>
          </form>
          <div class="col-sm-12" id="image_preview"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 


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
  .table-row td{
    vertical-align: middle !important;
  }
  #image_preview{
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
</style>
@endsection

@section('js')

<script src="{{ asset('admin_assets/js/ajax_admin.js') }}"></script>
{{-- <script>
$(function() {
    $('#admin-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getAdmins') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'avatar', name: 'name' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script>
 --}}@endsection