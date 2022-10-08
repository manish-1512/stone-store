@extends('website.layout')

@section('content')


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0 "><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
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
                      <img class="w-100 h-100" src="https://d3rmug8w64gkex.cloudfront.net/media/catalog/product/cache/20e68cdecc310a480bda7999995ffa78/b/s/bs140314-2.jpg" alt="Image">
                  </div>
                  <div class="carousel-item">
                      <img class="w-100 h-100" src="https://d3rmug8w64gkex.cloudfront.net/media/catalog/product/cache/20e68cdecc310a480bda7999995ffa78/b/s/bs140314-2.jpg" alt="Image">
                  </div>
                  <div class="carousel-item">
                      <img class="w-100 h-100" src="https://d3rmug8w64gkex.cloudfront.net/media/catalog/product/cache/20e68cdecc310a480bda7999995ffa78/b/s/bs140314-2.jpg" alt="Image">
                  </div>
                  <div class="carousel-item">
                      <img class="w-100 h-100" src="https://d3rmug8w64gkex.cloudfront.net/media/catalog/product/cache/20e68cdecc310a480bda7999995ffa78/b/s/bs140314-2.jpg" alt="Image">
                  </div>
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
            <h2 class="">Blue Sapphire (Neelam) Sri Lanka- 8.62 Carat (9.50 Ratti)</h2>
            <p>SKU: 2EFFG45</p>
            <p>Stock: in Stock</p>
            <p>Rating : 4.8</p>
            <p><strong class="text-primary h4">$50.00</strong></p>
            
             <p>SELECT FOR RING / PENDANT / BRACELET</p> 

     
            <div class="section over-hide z-bigger">
              <div class="section over-hide z-bigger">
                <div class="container">
                  <div class="row justify-content-center ">
                    
                    <div class="col-12 pb-5">
                      <input class="checkbox-tools" type="radio" name="tools" id="loose" checked>
                      <label class="for-checkbox-tools" for="loose">
                        <img src="{{asset('images/icon/loose.png')}}" alt="" height="50">
                        <p>LOOSE </p> 
                      </label><!--
                      --><input class="checkbox-tools" type="radio" name="tools" id="ring" class="" value="ring">
                      <label class="for-checkbox-tools" for="ring">
                        <img src="{{asset('images/icon/ring.png')}}" alt="" height="50">
                       <p> RING</p> 
                      </label>
                      <input class="checkbox-tools" type="radio" name="tools" id="pandent" class="" value="pandent">
                      <label class="for-checkbox-tools" for="pandent">
                        <img src="{{asset('images/icon/pandent.png')}}" alt="" height="50">
                        <p>PANDENT </p>  
                      </label>
                      <input class="checkbox-tools" type="radio" name="tools" id="bracelate" class="" value="bracelate">
                      <label class="for-checkbox-tools" for="bracelate">
                        <img src="{{asset('images/icon/pandent.png')}}" alt="" height="50">
                        <p> BRACELETE </p> 
                      </label>
                    </div>
                   
                   
                  </div>
                </div>	

                  <div class="container ring" style="display: none">

                      <div class="matel">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-6 col-form-label">MATAL</label>
                          <div class="col-sm-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Select One</option>
                              <option>Gold</option>
                              <option>silver</option>
                              <option>white Gold</option>
                              <option>yellow gold</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="disign">

                        <div class="row">

                          @for($i=1;$i<10;$i++)
                          <div class="col-4 col-md-3 ">
                            <input class="checkbox-tools2" type="radio" name="design" id="pandent{{$i}}">
                            <label class="for-checkbox-tool" for="pandent{{$i}}">
                              <img src="{{asset('images/icon/pandent.png')}}" alt="" height="50">
                            <p class="mb-0 mt-1"> <small>PANDENT </small></p>  
                            </label>
                          </div>
                          @endfor
                        </div>

                      </div>

                      <div class="ringsize">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-6 col-form-label">SELECT RING SIZE SYSTEM</label>
                          <div class="col-sm-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Select One</option>
                              <option>India</option>
                              <option>Us</option>
                              <option>Canade</option>
                              <option>UK</option>
                            </select>
                          </div>
                        </div>
                      </div> 
                      <div class="ringsize">
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-6 col-form-label">SELECT RING SIZE</label>
                          <div class="col-sm-6">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Select One</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                        </div>
                      </div> 
                  </div>
                  {{-- ring end here --}}

                   {{-- pandent start here --}}

                  <div class="container pandent" style="display: none">

                    <div class="matel">
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-6 col-form-label">MATAL</label>
                        <div class="col-sm-6">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select One</option>
                            <option>Gold</option>
                            <option>silver</option>
                            <option>white Gold</option>
                            <option>yellow gold</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="disign">

                      <div class="row">

                        @for($i=1;$i<10;$i++)
                        <div class="col-4 col-md-3 ">
                          <input class="checkbox-tools2" type="radio" name="design" id="pandent{{$i}}">
                          <label class="for-checkbox-tool" for="pandent{{$i}}">
                            <img src="{{asset('images/icon/pandent.png')}}" alt="" height="50">
                          <p class="mb-0 mt-1"> <small>PANDENT </small></p>  
                          </label>
                        </div>
                        @endfor
                      </div>

                    </div>

                    <div class="ringsize">
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-6 col-form-label">SELECT RING SIZE SYSTEM</label>
                        <div class="col-sm-6">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select One</option>
                            <option>India</option>
                            <option>Us</option>
                            <option>Canade</option>
                            <option>UK</option>
                          </select>
                        </div>
                      </div>
                    </div> 
                    <div class="ringsize">
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-6 col-form-label">SELECT RING SIZE</label>
                        <div class="col-sm-6">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select One</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                      </div>
                    </div> 
                </div>

                  {{-- pandent end here --}}

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
