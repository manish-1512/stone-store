@extends('website.layout')

@section('content')

 
<div class="container">
    <!-- Section: Features v.4 -->
    <section class="my-5" id="features">

      <!-- Secion heading -->
      <h1 class="text-center  mt-5 mb-5 pt-5 mb-4 drk-grey-text wow fadeIn title-font " data-wow-delay="0.2s">
        See All {{$category_data->name}}
        <div  class="mt-2"style="height:3px; background: rgb(121,56,56);
        background: radial-gradient(circle, rgba(121,56,56,1) 44%, rgba(255,255,255,1) 100%);
        ">

        </div>
      </h1>

      <!-- Section description -->
      {{-- <p class="text-center text-uppercase grey-text font-weight-bold mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">We
        serve the best coffee</p> --}}

      <!-- Grid row -->
      <div class="row wow fadeIn" data-wow-delay="0.4s">
        @if(count($subcategories) >0)
        @foreach($subcategories as $subcat)
         <!-- Grid row -->
         <div class="col-6 col-md-3 col-md-3 text-center pb-4">
          
            <div class="p-3" style=" box-shadow: 3px 3px 7px rgb(0 0 0 / 25%)">

                <a href="{{route('products',$subcat->slug)}}">
                <img src="{{APP_PATH.CATEGORY_IMAGE.$subcat->image}}" alt="" height="150px" width="150px">
                <h6 class="">{{$subcat->name}} </h6>
              </a>
            </div>
  
        </div>
        <!-- Grid row -->
       
           @endforeach 
       @else 
            <div class="p-3 text-center">
              
              <h6 class="text-center" > There is No Data Available </h6>
          </div>
      
       @endif 

      </div>
      <!-- Grid row -->
     
    </section>
    <!-- Section: Features v.4 -->

  </div>


@endsection