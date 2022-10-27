@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-md-6">
          <h1 class="m-0">Product Categories </h1>
        </div><!-- /.col -->
        <div class="col-12 col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="{{route('admin.cms.show')}}"> Categories </a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <div class="row px-3">
        <p>
          Update   Product Category
        </p>
    </div>
    <div class="row p-3 ">


      
      <!-- /.col -->
      <div class="col-sm-6 bg-light">
            
        <div class="p-4 border">

            <form action="{{route('admin.categories.update',$category->id)}}" method="post"  enctype="multipart/form-data" >
  
              @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
             
              <input type="text" name="name" value="{{$category->name }}" class="form-control" >
              @if ($errors->has('name'))
                    <span class="error text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Hindi Name</label>
            
              <input type="text" name="hindi_name" value="{{$category->hindi_name }}" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent Category</label>
                <select name="parent_id" id="" class="form-control"  >
                    <option value="">NO Parent</option>
                    @foreach ($all_categories as $item)
                    <option value="{{$item->id}}" {{ ($category->parent_id != null  &&  $category->parent_id == $item->id  )? 'selected' : '';   }}>{{$item->name}}</option>
                    @endforeach
                </select>
               
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Banner </label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="banner" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload </span>
                </div>
               
              </div>
              @if ($errors->has('banner'))
              <span class="error text-danger">{{ $errors->first('banner') }}</span>
             @endif
             <img src="{{asset(CATEGORY_BANNER)}}/{{$category->banner}}" class="mt-2" alt="" height="120">
            </div>
            <div class="form-group">
              <label >Short Description</label>
              <textarea name="short_description" id="short_description"  cols="30"  class="form-control"placeholder="Short Description"  rows="6"> {{ $category->short_description }} </textarea>
            </div>
            <div class="form-group">
              <label >Description</label>
              <textarea name="description" id="description"  cols="30"  class="form-control" placeholder="Description" rows="6">{{ $category->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Order</label>
                <input type="number" name="order"   class="form-control" value="{{$category->order }}" >
                @if ($errors->has('order'))
                <span class="error text-danger">{{ $errors->first('order') }}</span>
               @endif
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <button type="submit" class="btn btn-success">Save </button>
          
              <a  class="btn btn-danger" href="" >Cancle </a>
          </div>
            
          </div>
          <!-- /.card-body -->
          </form>
        </div>

      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->




  @endsection

  @section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#short_description' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

@endsection