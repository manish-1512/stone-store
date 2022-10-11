
@extends('admin.layouts.default')

@section('content')

<style>
    .nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: rgb(221, 213, 139);
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
      
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}

</style>

 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-6">
          <h1 class="m-0">Theme Options </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<!-- Demo header-->
<section class="py-5 header">
    <div class="container-fluid py-4 px-3">
       


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-home mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">GENERAL</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-image mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Logo</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-share mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Social</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa-solid fa-cart-shopping mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">E-Commerce</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                         <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General Setting</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Site Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter site title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">SEO Title</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter SEO Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">SEO Description</label>
                      <textarea name="" id="" cols="30" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Copyright</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Copyright text">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address </label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone no ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">About us</label>
                        <textarea name="" id="" cols="30" class="form-control" rows="6"></textarea>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update </button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Logo</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                              <div class="card-body">
                                
                                <div class="form-group">
                                  <label for="exampleInputFile">Logo</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Favicon</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload </span>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Social Settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Facebook</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter facebook url">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Twitter</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Twitter url ">
                                </div>
                               
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Youtube</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Youtube url ">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Instagram </label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Instagram url">
                                </div>                                
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update </button>
                              </div>
                            </form>
                          </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection