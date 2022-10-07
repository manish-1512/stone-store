@extends('website.layout')

@section('content')

    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://d3rmug8w64gkex.cloudfront.net/media/sliders/Certified_Natural_Rudraksha.jpg" alt="Los Angeles" width="100%" >
        </div>
        <div class="carousel-item">
          <img src="https://d3rmug8w64gkex.cloudfront.net/media/sliders/new-customized-jewellery.jpg" alt="Chicago" width="100%">
        </div>
       
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <div class="below_banner_icon">
      <div class="row text-center">
        <div class="col-6 col-md-3 mb-2 mb-md-0"> <i class="fa-solid fa-droplet"></i> 100% NATURAL </div>
        <div class="col-6 col-md-3 mb-2 mb-md-0"> <i class="fa-solid fa-droplet"></i> ACTIVATED & ENERGIZED </div>
        <div class="col-6 col-md-3 mb-2 mb-md-0"> <i class="fa-solid fa-droplet"></i>  LAB CERTIFIED </div>
        <div class="col-6 col-md-3 mb-2 mb-md-0"> <i class="fa-solid fa-droplet"></i> PREMIUM QUALITY </div>
     
      </div>
  
    </div>
{{-- 
    <div class="site-blocks-cover" style="background-image: url(images/banner1.png);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
        
            
          </div>
        </div>
      </div>
    </div>   --}}


    <div class="container">
      <!-- Section: Features v.4 -->
      <section class="mt-5" id="features">

        <!-- Secion heading -->
        <h1 class="text-center  mt-5 mb-5 pt-5 mb-3 drk-grey-text wow fadeIn title-font" data-wow-delay="0.2s">
          <em>EXPERIENCE THE POWER & BENEFITS OF OUR GEMSTONES</em>
        </h1>

        <section>

          <h2 class="text-center  mt-5 mb-5 pt-5 mb-4 drk-grey-text wow fadeIn title-font " data-wow-delay="0.2s">
            Precious Gemstone
            <div  class="mt-2"style="height:2px;width:100% ;background: rgb(121,56,56);
            background: radial-gradient(circle, rgba(121,56,56,1) 1%, rgba(255,255,255,1) 50%);
            ">
    
            </div>
          </h2>
  
          <!-- Section description -->
          
  
          <!-- Grid row -->
          <div class="row wow fadeIn" data-wow-delay="0.4s">
  
            <!-- Grid column -->
            <div class="col-md-4">
  
              <!-- Grid row -->
              <div class="row text-center pb-5">
                <div class="col-md-12">
                  <img src="{{asset('images/1.png')}}" alt="" height="120px" width="120px">
                  <h6 class="">BLUE SAPPHIRE</h6>
                  {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row text-center pb-5">
                <div class="col-md-12">
                  <img src="{{asset('images/2.png')}}" alt="" height="120px" width="120px">
                  <h6 class="">EMERALD</h6>
                  {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                </div>
              </div>
              <!-- Grid row -->
  
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 pb-3 flex-center">
              {{-- <img src="https://mdbootstrap.com/img/Photos/Others/coffee.jpg" alt="" class="z-depth-0 img-fluid"> --}}
              <img src="{{asset('images/3.png')}}" alt="" class="z-depth-0 img-fluid">
              <h6 class=" text-center mt-3">RUBY</h6>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4">
  
              <!-- Grid row -->
              <div class="row text-center pb-5">
                <div class="col-md-12">
                  <img src="{{asset('images/5.jpg')}}" alt="" height="120px" width="120px">
                  <h6 class="">YELLOW SAPPHIRE</h6>
                  {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                </div>
              </div>
              <!-- Grid row -->
  
              <!-- Grid row -->
              <div class="row text-center pb-5">
                <div class="col-md-12">
                  <img src="{{asset('images/4.png')}}" alt="" height="120px" width="120px">
                  <h6 class="">OPEL</h6>
                  {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                </div>
              </div>
              <!-- Grid row -->
  
            </div>
            <!-- Grid column -->
  
          </div>
          <!-- Grid row -->
          <div class="text-center my-4">
  
            <button type="button" class="btn buy_gemstone_btn title-font mb-4" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa  fa-gem"></i>  SEE  MORE </button>
  
              <div class="collapse" id="collapseExample">
                 <!-- Grid row -->
          <div class="row wow fadeIn" data-wow-delay="0.4s">
  
            <!-- Grid row -->
            <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/2.png')}}" alt="" height="120px" width="120px">
               <h6 class="">BLUE SAPPHIRE ( नीलम )</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
            <!-- Grid row -->
            <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/1.png')}}" alt="" height="120px" width="120px">
               <h6 class="">Yellow Sapphire (Pukhraj)</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
            <!-- Grid row -->
            <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/4.png')}}" alt="" height="120px" width="120px">
               <h6 class="">WHITE SOUTH SEA PEARL</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
            <!-- Grid row -->
            <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/3.png')}}" alt="" height="120px" width="120px">
               <h6 class="">RUBY</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
           <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/1.png')}}" alt="" height="120px" width="120px">
               <h6 class="">Yellow Sapphire (Pukhraj)</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
            <!-- Grid row -->
            <div class="col-6 col-md-4 col-md-3 text-center pb-5">
             <div class="col-md-12">
               <img src="{{asset('images/4.png')}}" alt="" height="120px" width="120px">
               <h6 class="">WHITE SOUTH SEA PEARL</h6>
               {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
             </div>
           </div>
           <!-- Grid row -->
           
       
  
         </div>
         <!-- Grid row -->
              </div>
        </section>

        <section>

        
         
  
          <div class="site-section block-3 site-blocks-2">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center">
                  <h2 class="text-center  mt-5 mb-5 pt-5 mb-4 drk-grey-text wow fadeIn title-font " data-wow-delay="0.2s">
                    Semi- Precious Gemstone
                    <div  class="mt-2"style="height:2px;width:100% ;background: rgb(121,56,56);
                    background: radial-gradient(circle, rgba(121,56,56,1) 10%, rgba(255,255,255,1) 80%);
                    ">
            
                    </div>
                  </h2>
                 
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="nonloop-block-3 owl-carousel">
                    @for($i=1;$i<10;$i++)
                    <div class="item">
                      <div class="block-4 text-center">
                        <a href="">

                          <figure class="block-4-image">
                            <img src="{{asset('images/1.png')}}" alt="Image placeholder"  >
                          </figure>
                        </a>
                       
                      </div>
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </section>
        </div>
      </section>
      <!-- Section: Features v.4 -->

    </div>


    {{--  --}}
    <img src="{{asset('images/banner1.png')}}" class="img-fluid" alt="">


    <div class="container-fluid  rudraksha_section ">
      <div class="container py-4">
          <div class="row">
              <div class="col-12 col-md-6">
                  <div class="text-center">
                        <h5 class="my-5 title-font ">NATURAL HIMALAYAN RUDRAKSHA</h5>
                          <p class="title-font">
                        Rudrakshas are sacred seeds from the Himalayas. Each Mukhi (face) Rudraksha has its own unique Energy, Vibration & Significance and provides multiple benefits to the wearer.
                      </p>
                  </div>
                  <div class="row">
                    <div class="col-12 mt-2">
                      <a href="#">
                        <img src="https://d3rmug8w64gkex.cloudfront.net/media/rudraksha/rudraksha-mala.png" alt="" class="rudraksha_image p-3 img-fluid">

                      </a>
                    </div>
                    
                  </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="text-center">
                  <h5 class="my-5 title-font ">SEE OUR RUDRAKSHA COLLECTION</h5>
                    
                </div>

                  <div class="row text-right">
                    @for($i=1;$i<10;$i++)
                    
                    <div class="col-4">
                     <a href="">
                      <div class="col-md-12 text-center">
                        <img src="{{asset('images/RUDRAKSHA.png')}}" alt="" height="120px" width="120px">
                        <h6 class="title-font">{{$i}} Mukhi </h6>
                        {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
                      </div> </a> 
                    </div>
                 
                    @endfor
                  </div>
              </div>
          </div>
      </div>
    </div>





    <div class="container pearl_section">
      <!-- Section: Features v.4 -->
      <section class="mt-5" id="features">

        <!-- Secion heading -->
        <h2 class="text-center  mt-5 mb-5 pt-5 mb-4 drk-grey-text wow fadeIn title-font " data-wow-delay="0.2s">
          PEARL COLLECTION
          <div  class="mt-2"style="height:2px;width:100% ;background: rgb(121,56,56);
          background: radial-gradient(circle, rgba(121,56,56,1) 10%, rgba(255,255,255,1) 80%);
          ">
  
          </div>
        </h2>

        <!-- Section description -->
        {{-- <p class="text-center text-uppercase grey-text font-weight-bold mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">We
          serve the best coffee</p> --}}

        <!-- Grid row -->
        <div class="row wow fadeIn" data-wow-delay="0.4s">


          @for($i=1;$i<9;$i++)
           <div class="col-6 col-md-4  col-lg-3  text-center pb-5">
            <a href="#">

              <div class="col-md-12">
                <img src="{{asset('images/pearl2.png')}}" alt="" height="100px" width="100px">
                <h6 class="mt-2">Pearl</h6>
                {{-- <p class="grey-text">Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p> --}}
              </div>
            </a>
          </div>
          @endfor

          
      

        </div>
        <!-- Grid row -->
       
      </section>
      <!-- Section: Features v.4 -->

    </div>

      <div class="container-fluid jewellery_collection">

           <!-- Secion heading -->
        <h2 class="text-center  mt-5 mb-5 pt-5 mb-4 drk-grey-text wow fadeIn title-font " data-wow-delay="0.2s">
          jewellery COLLECTION
          <div  class="mt-4"style="height:2px;width:100% ;background: rgb(121,56,56);
          background: radial-gradient(circle, rgba(121,56,56,1) 10%, rgba(255,255,255,1) 50%);
          ">
  
          </div>
        </h2>

        <div class="container py-5">
          <div class="row">
            @for($i=1;$i<4;$i++)
              <div class="col-12 col-md-4 mb-4">
                <a href="#">
                  <div class="card p-3 rounded" >
                    <img class="card-img-top" src="{{asset('images/ring.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center"> Ring </h5>
                    </div>
                  </div>

                </a>
                </div> 
            @endfor
          </div>

        </div>

      </div>

    {{-- <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/women.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Women</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/children.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Children</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/men.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Men</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> --}}

    

    
    {{-- <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Big Sale!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50% less in all items</a></h2>
            <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
            <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div> --}}

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