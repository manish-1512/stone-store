@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-md-6">
          <h1 class="m-0">Product Item Addon Price  </h1>
        </div><!-- /.col -->
        <div class="col-12 col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="#"> Product Item Addon Price  </a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <div class="row px-3">
        <p>
          Product Item Addon Price List 
        </p>
    </div>
    <div class="row p-3 ">

      <div class="col-12 col-md-4 bg-light mb-4">
            
        <div class="p-4 border">

              <form action="{{route('admin.product_addon_price.store')}}" method="post"  enctype="multipart/form-data" >
    
                @csrf
             



              <div class="form-group">
                <label for="exampleInputEmail1"> Select what is create  </label>
                    <select name="item_parent_id" id="category" class="form-control get_design">
                    
                        @foreach($product_top_category as $top_category) 
                        <option value="{{$top_category->id}}">{{$top_category->name}}</option>
                         @endforeach

                    </select>

                    
                  
                    @if ($errors->has('parent_id'))
                    <span class="error text-danger">{{ $errors->first('parent_id') }}</span>
                   @endif
              </div>

             


              <div class="form-group">
                <label for="exampleInputEmail1">Select Design  </label>
                <select class="browser-default form-control" name="final_product_item_id" id="sub_category"></select>
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1"> Select Matrial  </label>
                    <select name="product_matrial_id" id="" class="form-control">
                        
                        @foreach($product_matrial as $matrial)
                        
                        <option value="{{$matrial->id}}">{{$matrial->matrial_name}}</option>
                         @endforeach

                    </select>

                    @if ($errors->has('product_matrial_id'))
                      <span class="error text-danger">{{ $errors->first('product_matrial_id') }}</span>
                     @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> Addon Price  </label>
                    <input type="text" name="price" class="form-control" >
                    @if ($errors->has('price'))
                      <span class="error text-danger">{{ $errors->first('price') }}</span>
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


       
      <div class="col-12 col-md-8 bg-light ">
        <div id="accordion" class="myaccordion">

        <table class="table table-hover border">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category</th>
                  <th scope="col">Design</th>
                  <th scope="col">Matrial Name</th>
                  <th scope="col">Price</th>
                
                  <th scope="col">Created At</th>
              
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
          @foreach($data as $matrial)
                <tr>
                  <th>{{$matrial->id}}</th>
                  <td>{{$matrial->parent}}</td>
                  <td>{{$matrial->design}}</td>
                  <td>{{$matrial->matrial}}</td>
                  <td>{{$matrial->price}}</td>
                  <td>{{$matrial->created_at->format('d-m-Y')}}</td>
                
                  <td><a href="{{route('admin.final_product_item.edit',$matrial->id)}}"><i class="fa fa-edit fa-2x text-info"></i></a> &ensp;
                     <a href="{{route('admin.final_product_item.destroy',$matrial->id)}}   "><i class="fa fa-trash fa-2x text-danger"></i></a>  &ensp;
                     <a href="{{route('admin.final_product_item.status',$matrial->id)}}"> @if($matrial->is_active == 1)  <i class="fas fa-toggle-off fa-2x text-danger"></i>  @else <i class="fas fa-toggle-off fa-2x text-success"></i>  @endif  </a>
                  </td>
                  
                </tr>
              
          @endforeach
          </tbody>
          </table>
           
           
          </div>
      </div><!-- /.col -->
     
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->




  <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
  <script>
              $(document).ready(function () {
              $('#category').on('change', function () {
              let id = $(this).val();
              $.ajax({
              type: 'GET',
              url: '{{ route("admin.product_addon_price.get_design")}}',
              data: {id:id},
              success: function (response) {
         
              $('#sub_category').append(`<option value="0" disabled selected>Select Design </option>`);
                
              $('#sub_category').empty();
              $.each( response.data, function( key, value ) {
                $('#sub_category').append('<option value="'+value.id+'">'+value.name+' </option>');
      
              });

              // response.forEach(data => {
              //     $('#sub_category').append(`<option value="${data['id']}">${data['name']}</option>`);
              //     });
              }
          });
      });
  });
  </script> 
  @endsection






