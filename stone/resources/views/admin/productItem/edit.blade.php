@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-md-6">
          <h1 class="m-0">Product Matrial Edit </h1>
        </div><!-- /.col -->
        <div class="col-12 col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="{{route('admin.product_matrial.index')}}"> Product Matrial </a></li>
            <li class="breadcrumb-item"> <a href="#"> Edit </a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
   
    <div class="row p-3 ">

    
      <div class="col-sm-6 bg-light">
            
        <div class="p-4 border">

            <form action="{{route('admin.final_product_item.update',$data->id  )}}" method="post"  enctype="multipart/form-data" >
  
              @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Matrial Name</label>
             
              <input type="text" name="name" value="{{$data->name}}" class="form-control" >
              @if ($errors->has('name'))
                    <span class="error text-danger">{{ $errors->first('matrial_name') }}</span>
              @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"> Parent  </label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="">Select</option>

                        @foreach($data as $matrial)
                        
                        <option value="{{$matrial->id}}">{{$matrial->name}}</option>
                         @endforeach

                    </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1"> Image</label>
              
                <input type="file" name="image" value="{{ old('image') }}" class="form-control" >
                @if ($errors->has('image'))
                      <span class="error text-danger">{{ $errors->first('image') }}</span>
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