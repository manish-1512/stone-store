@extends('website.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            @include('website.user.layout')
        </div>
        <div class="col-12 col-md-8">
            <div class="p-4 shadow my-5">

                <form action="{{route('user.update_password')}}" method="POST">

                    @csrf
                    <h3 class="py-2">Change Password </h3>

                    <div class="form-group">
                      <label for="name">Old Password </label>
                      <input type="password" class="form-control" placeholder="Enter old Password" value="" name="old_password" >
                          @if ($errors->has('old_password'))
                          <span class="error text-danger">{{ $errors->first('old_password') }}</span>
                          @endif
                    </div>
                    <div class="form-group">
                      <label for="email">New Password</label>
                      <input type="password" class="form-control" placeholder="Enter New Password" value=""  name="password">
                      @if ($errors->has('password'))
                      <span class="error text-danger">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>

    </div>

</div>


@if ($message = Session::get('password'))
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
@if ($message = Session::get('password_not'))
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