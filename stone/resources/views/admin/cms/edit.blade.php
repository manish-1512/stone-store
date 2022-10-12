@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-6">
          <h1 class="m-0">Edit  Cms </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"> <a href="{{route('admin.cms.show')}}"> Cms Pages </a></li>
            <li class="breadcrumb-item active">Edit Cms Pages</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content p-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit</h3>
      </div>
      <!-- /.card-header -->
        
        <div class="card-body">

          <form action="{{route('admin.cms.update')}}" method="post" >

            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Page Title</label>
            <input type="hidden" name="slug"  value="{{$data->slug}}" >
            <input type="text" name="title" value="{{$data->title}}" class="form-control" >
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
            <img src="{{asset(WEBSITE_BANNER)}}/{{$data->banner}}"  alt="" height="120">
          </div>
             <!-- Main content -->
        <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-outline card-info">
                      <div class="card-header">
                        <h3 class="card-title">
                          Description
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <textarea id="summernote2" name="body">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                      </div>
                      <div class="card-footer">
                        
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
      
          </section>
          <!-- /.content -->
          <div class="form-group">
            <label >Meta Title </label>
            <input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control"  placeholder="Enter Meta Title">
          </div>
          <div class="form-group">
            <label >Meta Description</label>
            <textarea name="meta_description" id=""  cols="30"  class="form-control" rows="6">{{$data->meta_description}}</textarea>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Meta Keyword</label>
              <input type="text" name="meta_keywords" value="{{$data->meta_keywords}}" class="form-control"  placeholder="Enter Meta Keyword ">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <button type="submit" class="btn btn-success">Update </button>
            <button  class="btn btn-danger">Cancle </button>
        </div>
          
        </div>
        <!-- /.card-body -->
      </form>
      
    
    </div>

  </section>



@endsection
@section('scripts')

<script>
  $(function () {
    // Summernote
    $('#summernote2').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

@endsection