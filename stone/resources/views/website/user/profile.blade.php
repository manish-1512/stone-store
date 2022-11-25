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
                    <h3 class="py-2">My Profile</h3>

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" placeholder="Enter Name" value="{{$profile->name}}" name="name" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" placeholder="Enter email" value="{{$profile->email}}" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control"  name="phone" id="phone" value="{{$profile->phone}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>

    </div>

</div>


@endsection