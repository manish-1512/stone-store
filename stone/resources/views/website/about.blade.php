@extends('website.layout')

@section('mytitle', $about_data->title)

@section('content')

  <div class="page-banner">
       <img src="{{asset('images/about_banner.jpg')}}" class="img-fluid" width="100%" alt="Responsive image">
       <h2 class="banner-text about title-font"> {{$about_data->name}}</h2>
  </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('home')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$about_data->name}}</strong></div>
        </div>
      </div>
    </div>  
    <div class="site-section border-bottom" data-aos="fade">

    
      <div class="container">
        <h1 class="text-center about title-font mb-4"> {{$about_data->name}}</h1>
        <div  class="mt-4 mb-5 "style="height:2px;width:100% ;background: rgb(121,56,56);
        background: radial-gradient(circle, rgba(121,56,56,1) 10%, rgba(255,255,255,1) 50%);
        ">
        </div>
         <div>
          {!!$about_data->body!!}
         </div>
      </div>
    </div>

  


@endsection