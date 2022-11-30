@extends('website.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            @include('website.user.layout')
        </div>
        <div class="col-12 col-md-8">
            <div class="p-4 shadow my-5">

                <form action="{{route('user.profile_update')}}" method="POST">

                    @csrf
                    <h3 class="py-2">Change Password </h3>

                    <div class="form-group">
                      <label for="name">Old Password </label>
                      <input type="password" class="form-control" placeholder="Enter Name" value="" name="name" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">New Password</label>
                      <input type="password" class="form-control" placeholder="Enter email" value="" id="email" name="email">
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>

    </div>

</div>


@endsection