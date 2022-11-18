@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-md-6">
          <h1 class="m-0"> Add New Product</h1>
        </div><!-- /.col -->
        <div class="col-12 col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="#"> Add New Product</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <div class="row px-3">
       
    </div>
    <div class="row p-3 ">

      <div class="col-sm-12 bg-light mb-4">
            
        <div class="p-4 ">

              <form class="w-50" action="{{route('admin.product_matrial.store')}}" method="post"  enctype="multipart/form-data" >
    
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
              
                <input type="text" name="matrial_name" value="{{ old('name') }}" class="form-control" >
                @if ($errors->has('name'))
                      <span class="error text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select Category</label>
                
                  <select name="category_id" class="form-control" id="">
                    <option value="">Select Category</option>
                    {{$categories}}
                    @foreach($categories as $abc)
                    <option value="{{$abc->id}}">{{$abc->name}} </option>
                    @endforeach
                  </select>
          
                @if ($errors->has('category_id'))
                      <span class="error text-danger">{{ $errors->first('category_id') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
              
               <textarea name="description" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                      <span class="error text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Specifications</label>
              
               <textarea name="specifications" id="specifications" class="form-control" cols="30" rows="5">{{ old('specifications') }}</textarea>
                @if ($errors->has('specifications'))
                      <span class="error text-danger">{{ $errors->first('specifications') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
              
              <input type="file" name="image" class="form-control">
                @if ($errors->has('image'))
                      <span class="error text-danger">{{ $errors->first('image') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Gallery Images</label>
              
              <input type="file" name="gallery_images" class="form-control" multiple >
                @if ($errors->has('gallery_images'))
                      <span class="error text-danger">{{ $errors->first('gallery_images') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Price </label>
              
              <input type="text" name="price" class="form-control">
                @if ($errors->has('price'))
                      <span class="error text-danger">{{ $errors->first('price') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sale Price </label>
              
              <input type="text" name="sale_price" class="form-control">
                @if ($errors->has('sale_price'))
                      <span class="error text-danger">{{ $errors->first('sale_price') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity </label>
              
              <input type="text" name="quantity" class="form-control">
                @if ($errors->has('quantity'))
                      <span class="error text-danger">{{ $errors->first('quantity') }}</span>
                @endif
              </div>

              <label for="exampleInputEmail1">Available To Create </label>
              <div class="form-group">
                
              @foreach($available_to_create as $available)
              <div class="form-check form-check-inline">
                <input class="form-check-input deisgn" name="available_to_create" type="checkbox" id="inlineCheckbox1" value="{{$available->id}}">
                <label class="form-check-label" for="inlineCheckbox1">{{$available->name}}</label>
              </div>
              @endforeach
               
                @if ($errors->has('available_to_create'))
                <span class="error text-danger">{{ $errors->first('available_to_create') }}</span>
               @endif
              </div>
              




              <div class="form-group">
                <label for="exampleInputEmail1">Disappear After Order</label>
                
                <select name="disappear_after_order" class="form-control" id="">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                @if ($errors->has('disappear_after_order'))
                      <span class="error text-danger">{{ $errors->first('disappear_after_order') }}</span>
                @endif
              </div>

                          
              <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <button type="submit" class="btn btn-success">Save </button>
            
                <a  class="btn btn-danger" href="" >Cancle </a>
            </div>
                <!-- /.card-body -->
            </form>
          </div>
        
        </div>

     
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->




  @endsection

  @section('scripts')

  <script>
    $('.deisgn').click(function() {

      var array = [];

      $("input:checkbox[name=available_to_create]:checked").each(function() {
                array.push($(this).val());
            });

            $.ajax({
                type: "POST",
                url: "{{route('admin.product.designs_data')}}",
                data: {_token: '{{ csrf_token() }}', checked_value:array }, 
                success: function(data) {
                    console.console.log(data);
                }
            });

            
      });
  </script>


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
        .create( document.querySelector( '#specifications' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>

@endsection