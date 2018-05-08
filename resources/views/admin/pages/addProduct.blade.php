@extends('admin/layouts/master')
@section('content')
  <form id="add-product"  method="POST" role="form"  action="" >
    {{csrf_field()}}
    <legend>Add Product</legend>
  
    <div class="col-sm-6 col-xm-12">
      <div class="form-group">
        <label for="name">Product Name</label>
        <input name="name" type="text" id="name" class="form-control" placeholder="Product name" required="true">
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

        <label for="brand_id">Brand</label>
        
        <select name="brand_id" id="brand_id" class="form-control" required="required">
          @foreach ($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="category_id">Category</label>
        
        <select name="category_id" id="category_id" class="form-control" required="required">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-sm-6 col-xm-12">
      <table class="table table-hover">
        <thead>
          <tr>
            @foreach ($colors as $color)
              <th>{{$color->name}} <i style="color:{{$color->code}}" class="fa fa-circle" aria-hidden="true"></i>
              </th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($colors as $color)
            @foreach ($sizes as $size)
              <tr>
                <td></td>
              </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  
    
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary">Submit</button>       
    </div>
  </form>
@endsection 

@section('js')
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
@endsection
@section('css')

@endsection
