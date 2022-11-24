
@extends('admin.layouts.default')

@section('content')
  <div class="container-fluid">
    <div class="row px-3">
        <p>
          List Of  Products
        </p>
    </div>


    <div class="row p-3 ">
       
      <div class="col-sm-12 bg-light ">
        <div id="accordion" class="myaccordion">

        <table class="table  table-bordered">
              
              <tbody>
                <tr>
                    <th style="width:20%" scope="col">Name</th>
                    <td> {{$product_data->name}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Description</th>
                    <td> {{$product_data->description}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Status</th>
                    <td>@if($product_data->status == 1) Active @else InActive @endif</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Specifications</th>
                    <td> {!!$product_data->specifications!!}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Sku</th>
                    <td> {{$product_data->sku}}</td>
                </tr>   

                <tr>
                    <th style="width:20%" scope="col">Category </th>
                    <td> {{$product_data->category->name}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Price</th>
                    <td> {{$product_data->price}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Sale Price</th>
                    <td> {{$product_data->sale_price}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Stock Status</th>
                    <td>@if($product_data->stock_status == 1) In Stcok @else Out Of Stock @endif</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Available To Create</th>
                    <td> {{$product_data->available_to_create}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Disappear After Order</th>
               
                      <td>@if($product_data->disappear_after_order == 1) Yes @else No @endif</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Certificate</th>
                    <td> {{$product_data->certificate}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Created At</th>
                    <td> {{$product_data->created_at}}</td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Updated At</th>
                    <td> {{$product_data->updated_at}}</td>
                </tr>

                <tr>
                    <th style="width:20%" scope="col">Image</th>
                    <td> <img id="fullsizeimage" src="{{APP_PATH.PRODUCT_IMAGE.$product_data->image}}" alt="" height="200"> </td>
                </tr>    
                <tr>
                    <th style="width:20%" scope="col">Gallery </th>
                    <td>
                        @foreach($product_data->gallery_images as $image)
                        <img id="fullsizeimage" src="{{APP_PATH.PRODUCT_IMAGE.$image}}" alt="" height="200">
                        @endforeach
                    </td>
                </tr>    


           </tbody>

          </table>
          </div>
      </div>
     
    </div><!-- /.row -->

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>

  </div><!-- /.container-fluid -->



  {{--  --}}

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("fullsizeimage");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }
    </script>

  @if ($message = Session::get('success'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 1500
})
</script>
   
@endif

@if ($message = Session::get('error'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'error',
  title: "{{$message}}",
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif


  @endsection