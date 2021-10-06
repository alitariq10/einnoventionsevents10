<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col address">
						 	<p class="mb-0 phone"  style="display: inline-block; margin-left: 116px !important;"><span class="fa fa-phone"></span> <a href="#"><i class="fas fa-phone-alt"></i>+92333 1909909</a></p>
							 <p class="mb-0 phone" style="display: inline-block;"><a href="#"><i class="far fa-envelope"></i>Einnoventions Solution</a></p>
						</div>
						<div class="row marquee">
						   	<marquee onmouseover="this.stop();" onmouseout="this.start();">
			    <span style="font-size:90%; color:white;">***Always customer satisfication is our first priority. If customer having any issue Please write us on contact us form. We will resolve issue within 3-4 working days***</span>
			</marquee>
						</div>

						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<div class="sharethis-inline-share-buttons"></div>
				    			</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('front_assets/img/BeautyBird.png')}}" alt="Image" id="logo"></a>
	    	<div class="searchform order-sm-start order-lg-last">
                <!-- @if (empty(Auth::check()))
            <a href="{{url('/login-register')}}" type="button" class="btn btn-danger" id="userButton"> <i class="fas fa-user"></i>Login</a>
            @else
            <a href="{{url('/user-logout')}}" type="button" class="btn btn-danger" id="userButton"> <i class="fas fa-user"></i>LogOut</a>
            @endif -->
        </div>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="{{url('/index')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                
              </div> -->
            </li>
			<!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salons</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{url('/salons/Men Salon')}}" >Men Salons</a>
                <a class="dropdown-item" href="{{url('/salons/Women Salon')}}" >Women Salons</a>
              </div>
            </li> -->
	        	<li class="nav-item"><a href="" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
	          <!-- @if (Auth::check())
              <li class="nav-item"><a href="{{url('/cart/view')}}" class="nav-link border cart border border-warning text-warning">Cart<span>({{$cartCount}})</span></a></li>
              @else
              <li class="nav-item"><a href="{{url('/cart/view')}}" class="nav-link border cart border border-warning text-warning">Cart<span></span></a></li>
              @endif -->

			  <!--<li class="nav-item"><a href="{{url('/cart/view')}}" class="nav-link border cart border border-warning text-warning">Cart<span>(0)</span></a></li>-->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>




