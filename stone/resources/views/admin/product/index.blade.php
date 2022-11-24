
@extends('admin.layouts.default')

@section('content')
  <div class="container-fluid">
    <div class="row px-3">
        <p>
          List Of  Products
        </p>
    </div>


    <div class="mx-auto">
      <a href="{{route('admin.product.add')}}" class="btn btn-success"> Add New Product</a>
    </div>


    <div class="row p-3 ">
       
      <div class="col-sm-12 bg-light ">
        <div id="accordion" class="myaccordion">

        <table class="table table-hover border">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Price</th>
                  <th scope="col">Sale Price</th>
                  <th scope="col">Stock Status</th>
                  <th scope="col">Is Active </th>
                  <th scope="col">Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $item)
                    
                <tr>
                  <th>{{$item->id}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->category->name}}</td>
                  <td>{{$item->price}}</td>
                  <td>{{$item->sale_price}}</td>
                  <td>@if($item->stock_status == 1) <span class="text-success"> In Stcok </span> @else <span class="text-danger"> Out Of Stock </span> @endif</td>
                  <td>@if($item->status == 1) <span class="text-success">Active </span>  @else <span class="text-danger"> InActive </span> @endif</td>
                  <td>{{$item->created_at}}</td>
                  <td>
                    <a href="{{route('admin.product.status',$item->id)}}" title="Change Active status" class="btn btn-outline-info"><i class="fa fa-edit"></i></a> 
                    <a href="{{route('admin.product.stock_status',$item->id)}}" title="Change Stock status" class="btn btn-outline-warning"><i class="fa fa-shopping-bag"></i></a> 
                    <a onclick="return confirm('Are you sure?')" href="{{route('admin.product.destroy',$item->id)}}"  title="Delete Product" class="btn btn-outline-danger"><i class="fa fa-trash  "></i></a>
                    <a href="{{route('admin.product.edit',$item->id)}}"  title="Edit Product"  class="btn btn-outline-secondary"><i class="fa fa-edit  "></i></a>
                    <a href="{{route('admin.product.show',$item->id)}}"  title="View Product"  class="btn btn-outline-primary"><i class="fa fa-eye "></i></a>
                  </td>
                </tr>
                @endforeach
              
       
          </tbody>
          </table>
          </div>
      </div>
     
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->



  {{--  --}}
  @if ($message = Session::get('success'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 1500
})
</script>
   
@endif

@if ($message = Session::get('error'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'error',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif


  @endsection