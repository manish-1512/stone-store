@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 col-md-6">
          <h1 class="m-0">Final Product  </h1>
        </div><!-- /.col -->
        <div class="col-12 col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="#"> Final Product Item  </a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <div class="row px-3">
        <p>
          List Of  Product Item 
        </p>
    </div>
    <div class="row p-3 ">

      <div class="col-12 col-md-4 bg-light mb-4">
            
        <div class="p-4 border">

              <form action="{{route('admin.final_product_item.store')}}" method="post"  enctype="multipart/form-data" >
    
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1"> Name</label>
              
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" >
                @if ($errors->has('name'))
                      <span class="error text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> Parent  </label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="">Select</option>

                        @foreach($top as $matrial)
                        
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
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">parent</th>
                
                  <th scope="col">Created At</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
          @foreach($data as $matrial)
                <tr>
                  <th>{{$matrial->id}}</th>
                  <td>{{$matrial->name}}</td>
                  <td> <img src="{{APP_PATH.FINAL_ITEM_IMAGE.$matrial->image}}" height="50" alt=""> </td>
                  <td>{{$matrial->parent_id}}</td>
                  <td>{{$matrial->created_at->format('d-m-Y')}}</td>
                  <td> @if($matrial->is_active == 1)  <i class="fa fa-circle text-success"></i>  @else <i class="fa fa-circle text-danger"></i>  @endif </td>
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




  @endsection

