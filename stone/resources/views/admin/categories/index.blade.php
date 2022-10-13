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
        <div id="accordion" class="myaccordion">

          @foreach($top_categories as $category)

          <div class="card">
            <div class="card-header" id="{{$category->slug}}2">
              <div class="d-flex  justify-content-between">
                  <h2 class="mb-0">
                   
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#{{$category->slug}}" aria-expanded="false" aria-controls="{{$category->slug}}">
                      {{$category->name}}
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    
                    </button>
                   
                  </h2>
                  <a href="#"> <i class="fa fa-edit"></i></a>

              </div>
            </div>
            <div id="{{$category->slug}}" class="collapse" aria-labelledby="{{$category->slug}}2" data-parent="#accordion">
              <div class="card-body">
                  {{-- inner  --}}
                          <?php $sub_category =  DB::table('categories')->where('parent_id',$category->id)->get();?>

                          @if( count($sub_category) > 0)

                          @foreach($sub_category as $sub_cat)

                          <div class="card">
                            <div class="card-header" id="{{$category->slug}}3">
                              <div class="d-flex  justify-content-between">
                                  <h2 class="mb-0">
                                   
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#{{$sub_cat->slug}}" aria-expanded="false" aria-controls="{{$sub_cat->slug}}">
                                      {{$sub_cat->name}}
                                      <span class="fa-stack fa-sm">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                      </span>
                                    
                                    </button>
                                   
                                  </h2>
                                  <a href="#"> <i class="fa fa-edit"></i></a>
                
                              </div>
                            </div>
                            <div id="{{$sub_cat->slug}}" class="collapse" aria-labelledby="{{$category->slug}}3" data-parent="#accordion">
                              <div class="card-body">
                                  {{-- inner  --}}
                                          
                
                                {{-- inner --}}
                              </div>
                            </div>
                          </div>
                
                          @endforeach
                

                          @endif

                {{-- inner --}}
              </div>
            </div>
          </div>

          @endforeach

           
           
          </div>
      </div><!-- /.col -->
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
                    @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
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