@extends('admin/layouts/master')
@section('content')
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="category-table" data-url='{{route("getCategories")}}' class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              <a class="btn btn-success" data-toggle="modal" href='#add' >Add more category</a> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 

  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add new categories</h4>
        </div>
        <div class="modal-body">
        <form id="add-new"  method="POST" role="form" data-url='{{route("categories.store")}}' >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="name">Category name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Category name" required="true">
          </div>
        
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Edit category</h4>
        </div>
        <div class="modal-body">
        <form id="edit-form"  method="POST" role="form" >
          {{csrf_field()}}<!-- sinh token -->
          <div class="form-group">
            <label for="name">Category name</label>
            <input name="name" type="text" id="edit_name" class="form-control" placeholder="Category name" required="true">
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

<script src="{{ asset('admin_assets/js/ajax_category.js') }}"></script>
{{-- <script>
$(function() {
    $('#category-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getCategories') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action' }
        ]
    });

});
</script> --}}
@endsection