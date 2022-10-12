

@extends('admin.layouts.default')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-6">
          <h1 class="m-0">Cms Pages </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Cms Pages</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



   

    <!-- Main content -->
    <section class="content ">
      
      
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cms Pages </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Page Name</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                   @foreach ($data as $item)
                   <tr>
                    <td>{{$item->name}}</td>
                    <td> <a href="{{route('admin.cms.edit',$item->slug)}}" class="btn btn-outline-info " > <i class="fas fa-edit"></i> </a> </td>
                    
                  </tr>
                   @endforeach 

                  
                 

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Page Name</th>
                    <th>Action</th>
                    
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
         
   
    </section>


@endsection

@section('scripts')

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection

