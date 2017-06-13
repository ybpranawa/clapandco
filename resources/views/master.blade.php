<html>
    <head>
        <title>Clap and Co. Merchandising</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Vide" />
        <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="{{ URL::asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
        <!-- js -->
           <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{ URL::asset('assets/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/easing.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <link href="{{ URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!--- start-rate---->
        <script src="{{ URL::asset('assets/js/jstarbox.js')}}"></script>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
    </head>
    <body>
        <div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html">Clap and Co<span>Service You Better</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
                    @if (Session::has('username'))
                        <li><a href="profile" ><i class="fa fa-user" aria-hidden="true"></i>{{Session::get('username')}}</a></li>    
                    @else
                        <li><a href="login" ><i class="fa fa-user" aria-hidden="true"></i>Login/Register</a></li>
                    @endif
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="home" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Customable<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pakaian</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fashion Accessories</a></li>
												<li><a href="kitchen.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Craft</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Decoration &amp; Accessories</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Stationary</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Design &amp; Arts</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Furniture</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Advertising</a></li>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Produk Promosi</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4 w3l">
											<a href="kitchen.html"><img src="{{URL::asset('assets/images/me.png')}}" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Non-Customable <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Tempat Makan &amp; Minum </a></li>
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gadget/Elektronik</a></li>
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Alat Musik Modern/Tradisional</a></li>
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Menanam &amp; Pohon (Ecogreen)</a></li>
                                                <li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tempat Acara &amp; Exhibition Center</a></li>
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="care.html"><img src="{{URL::asset('assets/images/me1.png')}}" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li><a href="codes.html" class="hyper"> <span>How To Buy</span></a></li>
							<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
        </div>			
</div>

        @yield('content')
    </body>
</html>