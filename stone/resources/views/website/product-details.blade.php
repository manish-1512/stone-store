@extends('website.layout')

@section('content')


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0 "><a href="{{route('home')}}">Home</a> <span class="mx-1 mb-0">/</span> 
            <a href="{{route('products',$product_details->category->slug)}}">{{$product_details->category->name}}</a> <span class="mx-1 mb-0">/</span> {{$product_details->name}} </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
              
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner bg-light">

                <div class="carousel-item active">
                  <img class="w-100 h-100" src="{{APP_PATH.PRODUCT_IMAGE.$product_details->image}}" alt="{{$product_details->name}}">
              </div>

                @foreach($product_details->gallery_images as $key => $images )
                  <div class="carousel-item">
                      <img class="w-100 h-100" src="{{APP_PATH.PRODUCT_IMAGE.$images}}" alt="Image">
                  </div>
                @endforeach  

              </div>
              <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                  <i class="fa fa-2x fa-angle-left text-dark"></i>
              </a>
              <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                  <i class="fa fa-2x fa-angle-right text-dark"></i>
              </a>
          </div>
          
            <div class="description bg-light mt-5">

              <div class="p-4">
                  <h4 class="text-center">Description</h4>
                  <p class="text-center">Natural Ceylon Blue Sapphire (Neelam) of 8.62 Carat (9.50 Ratti), Premium Quality Gemstone of Sri Lanka origin for Best Results.</p>
              </div>

            </div>

            <div class="description bg-light mt-5">

              <div class="p-4">
                  <h4 class="text-center">Specifications</h4>
                  <div class="row mt-4">
                    <div class="col-6"><strong> Color </strong> </div>
                    <div class="col-6">blue</div>
                    <div class="col-6"><strong> Dimensions (L x W x H) </strong> </div>
                    <div class="col-6">12.6 x 9.93 x 7.46</div>
                    <div class="col-6"><strong> Country of Origin </strong> </div>
                    <div class="col-6">Ceylon (Sri Lanka) </div>
                    <div class="col-6"><strong> Certification  </strong> </div>
                    <div class="col-6">Lab Certified For Autenticity</div>
                    <div class="col-6"><strong> Weight/Size </strong> </div>
                    <div class="col-6">8.62 Carat (9.50 Ratti)</div>
                    
                  </div>
              </div>

            </div>
          
          </div>
          <div class="col-md-6">
            <h2 class="">{{$product_details->name}}</h2>
            <p>SKU: {{$product_details->sku}}</p>
            <p>Stock: @if($product_details->stock_status == 1 ) In Stock @else Out Of Stock @endif </p>
            {{-- <p>Rating : 4.8 </p> --}}
            <p><strong class="text-primary h4">{{$product_details->sale_price}}</strong></p>
            
             <p>SELECT WHICH YOU WANT TO MAKE</p> 

     
            <div class="section over-hide z-bigger">
              <div class="section over-hide z-bigger">
                <div class="container">
                  <div class="row justify-content-center ">
                    
                    <div class="col-12 pb-5">
                      <input class="checkbox-tools" type="radio" name="make" id="loose" checked>
                      <label class="for-checkbox-tools" for="loose">
                        <img src="{{asset('images/icon/loose.png')}}" alt="" height="50">
                        <p>LOOSE </p> 
                      </label>
                      
                      @foreach($available_to_create as $available)
                      <input class="checkbox-tools check" type="radio" name="make" id="{{$available->name}}" value="{{$available->id}}">
                      <label class="for-checkbox-tools" for="{{$available->name}}">
                        <img src="{{APP_PATH.FINAL_ITEM_IMAGE.$available->image}}" alt="" height="50">
                       <p> {{$available->name}}</p> 
                      </label>
                      @endforeach
                      
                    </div>
                   
                   
                  </div>
                </div>	

                  <div class="container" >

                      <div class="matel" style="display:none" id="matel">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-6 col-form-label">SELECT MATAL</label>
                          <div class="col-sm-6">
                            <select class="form-control" name="matel" id="exampleFormControlSelect1">
                              <option>Select One</option>
                             @foreach($product_matrials as $matrial)
                              <option value="{{$matrial->id}}">{{$matrial->matrial_name}}</option>
                             @endforeach
                            </select>
                          </div>
                        </div>
                      </div>

                    
                  </div>
                  {{-- ring end here --}}


              </div>
            </div>
              
            <p><a href="cart.html" class="buy-now btn btn-sm btn-block btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section site-section-sm site-blocks-1">
      <div class="container-fluid">
        <div class="row px-3">
          <div class="col-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">All India Delivery</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-6 col-lg-3 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-check"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">CERTIFIED</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  



@endsection

@section('css')

<script type="text/javascript">
  $(function() {
    $("input[name='make']").click(function() {
      if ($(".check").is(":checked")) {
        $("#matel").show();
      } else {
        $("#matel").hide();
      }
    });
  });
</script>


<script>

  $('select[name="matel"]').on('change', function() {
    var matrialId = $(this).val();
    var makefor = $("input[name='make']:checked").val();
    
    $.ajax({
        type: "POST",
        url: "{{route('product.available_designs')}}",
        data: {product_matrial_id  : matrialId , item_parent_id : makefor , _token: "{{ csrf_token() }}" },
        success: function (data) {
                  
          console.log(data);
        }
    });
  });
</script>

@endsection