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
          List Of  Product Categories
        </p>
    </div>
    <div class="row p-3 ">

       
      <div class="col-sm-6 bg-light ">
        
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Categories  </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Action</th>
                
              </tr>
              </thead>
              <tbody>

               @foreach ($categories as $item)
               <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->parent_id}}</td>
                <td> <a href="{{route('admin.categories.edit',$item->id)}}" class="btn btn-outline-info " > <i class="fas fa-edit"></i> </a>
                  <a href="{{route('admin.categories.delete',$item->id)}}" class="btn btn-outline-danger " > <i class="fas fa-trash"></i> </a> 
                </td>
              
                
              </tr>
               @endforeach 

              
             

              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Action</th>
                
                
              </tr>
              </tfoot>
            </table>
            <div class="mt-3">
              {{ $categories->onEachSide(5)->links('pagination::bootstrap-4') }}
            </div>
          </div>
          <!-- /.card-body -->
          
        </div>


        
      </div>
      
      <!-- /.col -->
      <div class="col-sm-6 bg-light">
            
        <div class="p-4 border">

            <form action="{{route('admin.categories.store')}}" method="post"  enctype="multipart/form-data" >
  
              @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
             
              <input type="text" name="name" value="{{ old('name') }}" class="form-control" >
              @if ($errors->has('name'))
                    <span class="error text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Hindi Name</label>
            
              <input type="text" name="hindi_name" value="{{ old('hindi_name') }}" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent Category</label>
                <select name="parent_id" id="" class="form-control"  >
                    <option value="">NO Parent</option>
                    @foreach ($all_categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category Label</label>
                <select name="label_id" id="" class="form-control"  >
                    <option value="">NO Label</option>
                    @foreach ($category_label as $label)
                    <option value="{{$label->id}}">{{$label->label}}</option>
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

            </div>
            <div class="form-group">
              <label for="exampleInputFile">image </label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload </span>
                </div>
               
              </div>
              @if ($errors->has('image'))
              <span class="error text-danger">{{ $errors->first('image') }}</span>
             @endif

            </div>
            <div class="form-group">
              <label >Short Description</label>
              <textarea name="short_description" id="short_description"  cols="30"  class="form-control"placeholder="Short Description"  rows="6">{{old('short_description')}}</textarea>
            </div>
            <div class="form-group">
              <label >Description</label>
              <textarea name="description" id="description"  cols="30"  class="form-control" placeholder="Description" rows="6">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Order</label>
                <input type="number" name="order"   class="form-control" value="{{old('order')}}" >
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