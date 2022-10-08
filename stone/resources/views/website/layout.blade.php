<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda&family=Satisfy&display=swap" rel="stylesheet">

  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">

              <a href="tel:+919978038886"><span class="icon icon-phone"> <small>+919978038886</small></span></a> |
              <div class="btn-group mx-2 currency_selector">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">EUR</button>
                    <button class="dropdown-item" type="button">GBP</button>
                    <button class="dropdown-item" type="button">CAD</button>
                </div>
              </div>
              {{-- <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form> --}}
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">
                  <img src="{{asset('images/logo.png')}}" alt="" height="80px">
                </a>
              </div>
            </div>
           
            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a data-toggle="modal" data-target="#wishlist" class="site-cart"><span class="icon icon-heart-o"></span>   <span class="count">2</span></a></li>
                  <li>
                    <a href="cart.html" data-toggle="modal" data-target="#cart" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle  "><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 

      {{-- wishlist model box --}}

      <div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlistLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="wishlistLabel">My Wish List</h5> <hr>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @for($i=1;$i<4;$i++)
                <div class="row">
                    <div class="col-3">
                      <img src="{{asset('images/most1.png')}}" alt="" height="60">
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                              <a href="#" class="font-weight-bold"> Black Agate (Hakik) Gemstone Stretchable Bracelet  </a>
                            </div>
                            <div class="col-4">
                              <a href="#" class=""> ₹ 4000</a>
                            </div>
                            <div class="col-4">
                              <a href="#" class="">View Details  </a>
                            </div>
                            <div class="col-4">
                              <a href="#" class=""> <i class="fa text-danger fa-trash " > </i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endfor
            </div>
            
          </div>
        </div>
      </div>
      {{-- end wishlist model box --}}

      {{-- cart model box --}}

      <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="cartLabel">2 Item In Cart </h5> <hr>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @for($i=1;$i<3;$i++)
                <div class="row">
                    <div class="col-3">
                      <img src="{{asset('images/most1.png')}}" alt="" height="60">
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                              <a href="#" class="font-weight-bold"> Black Agate (Hakik) Gemstone Stretchable Bracelet  </a>
                            </div>
                            <div class="col-4">
                              <a href="#" class=""> ₹ 4000  * 1 </a>
                            </div>
                            <div class="col-4">
                              <a href="#" class="">View Details  </a>
                            </div>
                            <div class="col-4">
                              <a href="#" class=""><i class="text-danger fa fa-trash" ></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endfor

                <div class="row bg-light text-center pt-2">
                  <div class="col-6">
                    <p class="font-weight-bold">Cart SubTotal</p>
                  </div>
                  <div class="col-6">
                    <p> ₹ 8000</p>
                  </div>
                </div>

                  <div class="row text-center mt-3">

                    <div class="col-6">
                      <a href="#" class="btn btn-primary text-white"> View Cart</a>
                    </div>
                    <div class="col-6">
                      <a href="#" class="btn btn-primary text-white"> Checkout</a>
                    </div>

                  </div>
            </div>
            
          </div>
        </div>
      </div>
      {{-- end cart model box --}}



      <div class="menu-container">
        <div class="menu" >
        
          <ul class="clearfix">
            <li><a href="#">GEMSTONES</a></li>
            <li><a href="#">RUDRAKSHA</a>
              <ul>
                <li><a href="#">School</a>
                  <ul>
                    <li><a href="#">Lidership</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </li>
                <li><a href="#">Study</a>
                  <ul>
                    <li><a href="#">Undergraduate</a></li>
                    <li><a href="#">Masters</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Online</a></li>
                  </ul>
                </li>
                <li><a href="#">Research</a>
                  <ul>
                    <li><a href="#">Undergraduate research</a></li>
                    <li><a href="#">Masters research</a></li>
                    <li><a href="#">Funding</a></li>
                  </ul>
                </li>
                <li><a href="#">Something</a>
                  <ul>
                    <li><img src="https://placeimg.com/300/200/nature"></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Ladies Ring </a>
              <ul>
                <li><a href="#">Today</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Sport</a></li>
              </ul>
            </li>
            <li><a href="#">gents ring</a>
              <ul>
                <li><a href="#">School</a>
                  <ul>
                    <li><a href="#">Lidership</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </li>
                <li><a href="#">Study</a>
                  <ul>
                    <li><a href="#">Undergraduate</a></li>
                    <li><a href="#">Masters</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Online</a></li>
                  </ul>
                </li>
                <li><a href="#">Study</a>
                  <ul>
                    <li><a href="#">Undergraduate</a></li>
                    <li><a href="#">Masters</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Online</a></li>
                  </ul>
                </li>
                <li><a href="#">Empty sub</a>
                  <ul>
                    <li><img src="https://placeimg.com/300/200/people"></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Ladies bangles</a>
              <ul>
                <li><a href="#">School</a>
                  <ul>
                    <li><a href="#">Lidership</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </li>
                <li><a href="#">Study</a>
                  <ul>
                    <li><a href="#">Undergraduate</a></li>
                    <li><a href="#">Masters</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Online</a></li>
                  </ul>
                </li>
                <li><a href="#">Study</a>
                  <ul>
                    <li><a href="#">Undergraduate</a></li>
                    <li><a href="#">Masters</a></li>
                    <li><a href="#">International</a></li>
                    <li><a href="#">Online</a></li>
                  </ul>
                </li>
                <li><a href="#">Empty sub</a>
                  <ul>
                    <li><img src="https://placeimg.com/300/200/people"></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
      {{-- <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children ">
              <a href="index.html">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="about.html">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav> --}}
    </header>


    @yield('content')




    <footer class="site-footer border-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="row">
                {{-- <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Navigations</h3>
                </div> --}}
                <div class="col-md-6 col-lg-4">
                  <h3 class="footer-heading mb-4">Navigations</h3>
                  <ul class="list-unstyled">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                    <li><a href="{{route('terms-conditions')}}">Terms & Conditions</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                  <h3 class="footer-heading mb-4">USEFUL LINKS</h3>
                  <ul class="list-unstyled">
                    <li><a href="{{route('ring-designs')}}">Ring Designs  </a></li>
                    <li><a href="{{route('pendant-designs')}}">Pendant Designs </a></li>
                    <li><a href="{{route('products')}}">Shopping cart</a></li>
                    <li><a href="{{route('category-page')}}">Store builder</a></li>
                  </ul>
                </div>
               
              </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                  <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                  <li class="email">emailaddress@domain.com</li>
                </ul>
              </div>
  
              {{-- <div class="block-7">
                <form action="#" method="post">
                  <label for="email_subscribe" class="footer-heading">Subscribe</label>
                  <div class="form-group">
                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                  </div>
                </form>
              </div> --}}
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <h3 class="footer-heading mb-4">Download the App Now </h3>
              <ul class="list-unstyled">
                <li><a href="#"><img src="{{asset('images/playstore.png')}}" alt="" height="50px"></a></li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-12 footer_icon mt-5">
            <ul>
              <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="row pt-5  text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank" class="text-primary">Manish</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
  
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    
    <script>
      $(document).ready(function() {
      "use strict";
      $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
      $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
      // $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
      $(".menu > ul > li").hover(function(e) {
        if ($(window).width() > 943) {
          $(this).children("ul").stop(true, false).fadeToggle(150);
          e.preventDefault();
        }
      });
      $(".menu > ul > li").click(function() {
        if ($(window).width() <= 943) {
          $(this).children("ul").fadeToggle(150);
        }
      });
      $(".icon-menu").click(function(e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
      });
    });
    $(window).resize(function() {
      $(".menu > ul > li").children("ul").hide();
      $(".menu > ul").removeClass('show-on-mobile');
    });
  
    </script>
      <script>
        window.onload = function() {
      var menuButton = document.getElementById("open-menu");
      menuButton.click();
  };
      </script>


    </body>
  </html>