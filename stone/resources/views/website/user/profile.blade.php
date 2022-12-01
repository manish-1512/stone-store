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
                      @if ($errors->has('name'))
                      <span class="error text-danger">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" placeholder="Enter email" value="{{$profile->email}}" id="email" name="email">
                      @if ($errors->has('email'))
                      <span class="error text-danger">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control"  name="phone" id="phone" value="{{$profile->phone}}">
                      @if ($errors->has('phone'))
                      <span class="error text-danger">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>

    </div>

</div>

@if ($message = Session::get('profile'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 2500
})
</script>
   
@endif
@if ($message = Session::get('profile_not'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'error',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 2500
})
</script>
   
@endif



@endsection