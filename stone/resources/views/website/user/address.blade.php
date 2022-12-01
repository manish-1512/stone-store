@extends('website.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            @include('website.user.layout')
        </div>
        <div class="col-12 col-md-8">
            <div class="p-4 shadow my-5">
                    <div class="d-flex justify-content-between p-2">
                        <h4 class="py-2">Manage Address</h4>
                        <button class="btn btn-sm btn-success"  data-toggle="modal" data-target=".add_address">add new </button>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                   <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered">
                                

                             @if (count($addresses)> 0)

                             <thead>
                                <tr>
                                  
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Full Address</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addresses as $address)
                                           <tr>
                                                <td>{{$address->full_name}}</td>
                                                <td>{{$address->email}}</td>
                                                <td>{{$address->landmark}},{{$address->city}},{{$address->state}},{{$address->country}}</td>
                                                <td>
                                                     <button class="btn btn-sm btn-outline-success edit_address"  value="{{$address->id}}" data-toggle="modal" data-target="#edit_address">  <i class="fas fa-edit"></i> </button>
                                                  <button  data-bs-toggle="modal" data-bs-target="#delete_policy" value="{{$address->id}}" class="delete_policy btn btn-outline-danger" > <i class="fas fa-trash"></i> </button> 
                                                </td>
            
                                            </tr>
                                    @endforeach
                                    
                                    @else   
                                            <h5 class="text-center"> No Address Found </h5>
                                    @endif
                                
                                </tbody>
                                
                                </table>
                                
                            </div>
                            <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

</div>


<div class="modal fade " id="edit_address" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class="p-4">
            
            <form>
                <h5>Edit Address</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Full name</label>
                      <input type="text" name="id" id="edit_id">
                      <input type="text" class="form-control" name="full_name" id="edit_full_name" placeholder="full name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" id="edit_email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Phone Number</label>
                      <input type="text" class="form-control" name="mobile" id="edit_mobile" placeholder="Enter phone number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Country</label>
                        <select id="inputState" class="form-control" name="country">
                            <option selected value="">Choose...</option>
                            @foreach ($countries as  $country)
                                  <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <input type="text" name="state" class="form-control" id="edit_state" placeholder="Enter state">
                    </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="edit_city" name="city"  placeholder="Enter city name">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="postel_code" id="edit_postel_code" placeholder="Enter pincode">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputLandmark">Landmark</label>
                      <input type="text" name="landmark" class="form-control"  id="edit_landmark" placeholder="Enter landmark">
                    </div>
                  
                </div>
                <div class="form-row">
                    <label for="inputLandmark">Is Primary Address</label>
                    <select  class="form-control" id="edit_is_primary" name="is_primary">
                        <option value="1">Yes</option>
                        <option value="0">no</option>
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Address</button>
              </form>


        </div>



    </div>
  </div>
</div>




<div class="modal fade add_address" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
  
          <div class="p-4">
              
              <form id="add_address" action="{{route('user.add_address')}}" method="POST">
                  <h5>Add New Address</h5>
                  @csrf
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" name="full_name" id="name" placeholder="full name">
                        <span class="text-danger error-text full_name_error "></span>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                          <span class="text-danger error-text email_error "></span>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Phone Number</label>
                        <input type="text" class="form-control" name="mobile" id="name" placeholder="Enter phone number">
                        <span class="text-danger error-text mobile_error "></span>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputEmail4">Country</label>
                          <select id="inputState" class="form-control" name="country">
                              <option selected value="">Choose...</option>
                              @foreach ($countries as  $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                              @endforeach
                            </select>
                            <span class="text-danger error-text country_error "></span>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <input type="text" name="state" class="form-control"  placeholder="Enter state">
                        <span class="text-danger error-text state_error "></span>
                      </div>
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" name="city" id="inputCity" placeholder="Enter city name">
                      <span class="text-danger error-text city_error "></span>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" name="postel_code" id="inputZip" placeholder="Enter pincode">
                      <span class="text-danger error-text postel_code_error "></span>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="inputLandmark">Landmark</label>
                        <input type="text" name="landmark" class="form-control"  placeholder="Enter landmark">
                        <span class="text-danger error-text landmark_error "></span>
                      </div>
                    
                  </div>
       
                      <div class="form-row">
                        <label for="inputLandmark">Is Primary Address</label>
                        <select id="inputState" class="form-control" name="is_primary">
                            <option selected>Choose...</option>
                            <option value="1">Yes</option>
                            <option value="0">no</option>
                          </select>
                    </div>
                 
                  <button type="submit" class="btn btn-primary">Update Address</button>
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



<script>
    
    $("#add_address").on('submit',function(e){
    
    
    e.preventDefault();
    
    $.ajax({
    
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
    
                $(document).find('span.error-text').text('')
            },
            success:function(data){
    
                if(data.status == 401){
    
                    $.each(data.error,function(prefix,val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
    
                }else if(data.status == 200){
    
                    $('#add_address')[0].reset();
    
                    Swal.fire(
                                'Good job!',
                                data.message,
                                'success'
                        );
    
                 window.location = "";
    
                }else if(data.status == 500){
    
                  Swal.fire(
                                'Oops...',
                                'Something went wrong!',
                                'error'
                        );
    
                 window.location = ""     
    
                }
    
            } 
    
    
    
    });
    
    });
  


    $(document).on('click','.edit_address',function(e){

            e.preventDefault();

            let address_id = $(this).val();

            $.ajax({

            type:"GET",
            url:  "{{APP_PATH}}"+"edit-address/"+address_id,


                    success:function(response){

                
                if(response.status == 404){
                    
                    Swal.fire(
                                            response.message,
                                            'no data found',
                                            
                                    );
                }else{

                    $('#edit_id').val(address_id);
                    $('#edit_full_name').val(response.address_data.full_name);
                    $('#edit_email').val(response.address_data.email);
                    $('#edit_mobile').val(response.address_data.mobile);
                    $('#edit_state').val(response.address_data.state);
                    $('#edit_city').val(response.address_data.city);
                    $('#edit_country').val(response.address_data.country);
                    $('#edit_postel_code').val(response.address_data.postel_code);
                    $('#edit_landmark').val(response.address_data.landmark);
                    $('#edit_is_primary').val(response.address_data.is_primary);
             

                }  


            }

            });

});

</script>

@endsection