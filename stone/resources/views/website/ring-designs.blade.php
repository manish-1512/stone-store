@extends('website.layout')

@section('content')

  <div class="page-banner">
       <img src="{{asset('images/about_banner.jpg')}}" class="img-fluid" width="100%" alt="Responsive image">
       <h2 class="banner-text"> Ring Designs </h2>
  </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Ring  Designs</strong></div>
        </div>
      </div>
    </div>  

    <div class="container">
        <!-- Section: Features v.4 -->
        <section >
  
          <!-- Secion heading -->
         
             <div class="container">
                <!-- Section: Features v.4 -->
                <section class="mt-5" id="features">

                  <!-- Secion heading -->
                  <h1 class="text-center  mt-5 mb-5 pt-5 mb-3 drk-grey-text wow fadeIn" data-wow-delay="0.2s">
                  Ring Designs
                  </h1>

                  <!-- Section description -->
                  {{-- <p class="text-center text-uppercase grey-text font-weight-bold mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">We
                    serve the best coffee</p> --}}
                    @for($i=1;$i<3;$i++)
                      <!-- Grid row -->
                      <div class="row wow fadeIn" data-wow-delay="0.4s">

                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring1.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S1</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring2.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S2</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring3.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S3</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring4.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S4</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring5.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S5</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                        <div class="col-6 col-md-4 col-md-3 text-center pb-5">
                          <div class="col-md-12">
                            <img src="{{asset('images/rings/ring6.png')}}" alt="" height="120px" width="120px">
                            <h6 class="mt-3">S6</h6>
                            {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                          </div>
                        </div>
                        <!-- Grid row -->
                        
                    

                      </div>
                      <!-- Grid row -->
                  @endfor
                </section>
                <!-- Section: Features v.4 -->

             </div>
        
  
  
       
         
        </section>
        <!-- Section: Features v.4 -->
  
      </div>

  


@endsection