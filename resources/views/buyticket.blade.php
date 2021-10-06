@extends('tickets.layouts.app')
@section('content')
@if(Session::has('flash_message_error'))
 <div class="alert alert-sm alert-danger alert-block" role="alert">
     <button type="button" class="close" data-dismiss='alert' aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     <strong>{!! session('flash_message_error') !!}</strong>
 </div>
@endif
@if(Session::has('flash_message_success'))
<div class="alert alert-sm alert-success alert-block" role="alert">
 <button type="button" class="close" data-dismiss='alert' aria-label="Close">
     <span aria-hidden="true">&times;</span>
 </button>
 <strong>{!! session('flash_message_success') !!}</strong>
</div>
@endif

<div class="container">
  <div class="row">
      <div class="col-sm-12">
          <div class="text-center dealhead">
              <p style="color: rgba(0, 0, 0, 0.8); font-weight: lighter;">Your <span class="maincolor" style="color: rgba(0, 0, 0, 0.8); font-weight: 900;">Ticket</span></p>
          </div>
          <!-- <div class="text-center secondhead">
              <p style="color: rgba(0, 0, 0, 0.8); font-weight: lighter;">For all your salon needs</p>
          </div> -->
      </div>
  </div>
</div>

<div class="container-fluid deal">
    <div class="row">
     <div class="col-sm-6 product_slider">
       <div class="row">
        <div class="col-sm-12">
          <button class="MuiButton border shadow" tabindex="0" type="button" style="color: rgb(244, 100, 0); background-color: white;"><span class="MuiButton-label"><img src="https://res.cloudinary.com/dyqcevdpm/image/upload/v1596540654/new-design/ic_star.png" style="width: 20px; padding-right: 5px;"> Offers</span><span class="MuiTouchRipple-root"></span></button>
          <!-- <div class="productimg_ori float-right border"><img src="" alt="" style="width: 20px;"><span>&nbsp;100% Original</span></div> -->
        </div>
       </div>
        <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
            <!-- slides -->
            <div class="carousel-inner">

                <div class="carousel-item active"> <img src=" alt="Hills"> </div>

                
                <div class="carousel-item"> <img src="" alt="Hills"> </div>
                
            </div> <!-- Left right --> <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
            <ol class="carousel-indicators list-inline">
                
                <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="" class="img-fluid"> </a> </li>
                
{{--
                <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://www.dealhub.pk/storage/product-image/185_dealhub.pk_432983_id_301.jpg" class="img-fluid"> </a> </li>
                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://www.dealhub.pk/storage/product-image/289_dealhub.pk_664271_id_301.jpg" class="img-fluid"> </a> </li>
                <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://www.dealhub.pk/storage/product-image/892_dealhub.pk_666178_id_301.jpg" class="img-fluid"> </a> </li> --}}
            </ol>
        </div>
     </div>
     <div class="col-sm-6 product_slider">
      <div id="dealdescription">
        <div class="set">
        <h5 id="deal-head">{{$tiket->code}}</h5>
        </div>

     

        <div id="set">
        
        <p class="price" style="padding-left: 0px; text-align: inherit; display: inline-block; font-size: 22px; "><span itemprop="priceCurrency" content="INR">Rs</span><span itemprop="price" content="">Ticket Price {{$tiket->price}}</span></p>
        
        
        
      </div>

     <div id="dealdetails">
       <p class="pt-1">
        Ticket Description
        </p>
       </div>
      
       <div class="set">
       
       <a href="{{url('/book-ticket')}}" style="background: red; color: white;" class="btn" id="card-id" ><i class="fas fa-shopping-cart"></i>Buy Now</a>
       </div>
       
       

     
      </div>
    </div>
    </div>
</div>

<br>



@endsection
