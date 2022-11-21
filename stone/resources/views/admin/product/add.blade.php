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

              <form class="w-50" action="{{route('admin.product.store')}}" method="post" id="customer_create"  enctype="multipart/form-data" >
    
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
              
                <input type="text" name="name"  class="form-control" >
                <span class="text-danger error-text  name_error "></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Select Category</label>
                
                  <select name="category_id" class="form-control"  id="">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->name}}</option>
                    @endforeach
                 
                  </select>          
                  <span class="text-danger error-text  category_id_error "></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
              
               <textarea name="description" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>
               <span class="text-danger error-text  description_error "></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Specifications</label>
              
               <textarea name="specifications" id="specifications" class="form-control" cols="30" rows="5">{{ old('specifications') }}</textarea>
               <span class="text-danger error-text  specifications_error "></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
              
              <input type="file" name="image" class="form-control">
                <span class="text-info">The image may not be greater than 1048 kb.</span>
                <span class="text-danger error-text  image_error "></span>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gallery Images</label>
              
              <input type="file" name="gallery_images[]" class="form-control" multiple >
              <span class="text-info">any image may not be greater than 1048 kb.</span>
              <span class="text-danger error-text  gallery_images_error "></span>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Price </label>
              
              <input type="text" name="price" class="form-control" value="{{ old('price') }}">
              <span class="text-danger error-text  price_error "></span>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sale Price </label>
              
              <input type="text" name="sale_price" class="form-control" value="{{ old('sale_price') }}">
              <span class="text-danger error-text  sale_price_error "></span>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity </label>
              <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control">
              <span class="text-danger error-text  quantity_error "></span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sku </label>
              <input type="text" name="sku"  class="form-control">
              <span class="text-danger error-text  sku_error "></span>
              </div>

              <label for="exampleInputEmail1">Available To Create </label>
              <div class="form-group">
                
              @foreach($available_to_create as $available)
              <div class="form-check form-check-inline">
                <input class="form-check-input deisgn" name="available_to_create[]" type="checkbox" id="inlineCheckbox1" value="{{$available->id}}">
                <label class="form-check-label" for="inlineCheckbox1">{{$available->name}}</label>
              </div>
              @endforeach
               <span class="text-danger error-text  available_to_create_error "></span>
              </div>
              

              <div class="form-group">
                <label for="exampleInputEmail1">Disappear After Order</label>
                
                <select name="disappear_after_order" class="form-control" id="">
                  <option value="">Select </option>
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                <span class="text-danger error-text  disappear_after_order_error "></span>
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

  {{-- <script>
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
  </script> --}}

<script>
    
  $(document).ready( function(){
    
    $("#customer_create").on('submit',function(e){

        e.preventDefault();

        $.ajax({

               url:$(this).attr('action'),
           
               method:$(this).attr('method'),
               data:new FormData(this),
               processData:false,
               dataType:'json',
               contentType:false,
               beforeSend:function(){

                    $(document).find('span.error-text').text('')
               },
               success:function(data){

                    if(data.status == 401){
                        $.each(data.error,function(prefix,val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });

                    }else if(data.status == 500){

                      Swal.fire(
                                  'Oops...',
                                   data.message,
                                  'error'
                          );
                    }else if(data.status == 200){
                      $('#customer_create')[0].reset();
                          Swal.fire({
                          position: 'center',
                          icon: 'success',
                          title: data.message,
                          showConfirmButton: false,
                          timer: 2000
                        })

                    window.location = "" 
                          
                    }

               } 

        });

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