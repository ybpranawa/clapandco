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
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::asset('admin/dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{URL::asset('admin/dist/css/skins/_all-skins.min.css')}}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{URL::asset('admin/plugins/morris/morris.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{URL::asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{URL::asset('admin/plugins/datepicker/datepicker3.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{URL::asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
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
    <body class="hold-transition skin-blue sidebar-mini">
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>{{Session::get('username')}}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="dashboard" ><i class="fa fa-user" aria-hidden="true"></i>Dashboard</a></li>    
                                <li><a href="logout" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </li>
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

                                <li><a href="#" class="hyper"> <span>How To Buy</span></a></li>
                                <li><a href="#" class="hyper"><span>Contact Us</span></a></li>
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
        
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 footer-grid">
                    <h3>About Us</h3>
                    <p>Nam libero tempore, cum soluta nobis est eligendi 
                        optio cumque nihil impedit quo minus id quod maxime 
                        placeat facere possimus.</p>
                </div>
                <div class="col-md-3 footer-grid ">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="kitchen.html">Kitchen</a></li>
                        <li><a href="care.html">Personal Care</a></li>
                        <li><a href="hold.html">Household</a></li>						 
                        <li><a href="codes.html">Short Codes</a></li> 
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid ">
                    <h3>Customer Services</h3>
                    <ul>
                        <li><a href="shipping.html">Shipping</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                        <li><a href="faqs.html">Faqs</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="offer.html">Online Shopping</a></li>						 

                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
                    <div class="footer-bottom">
                        <h2 ><a href="index.html">Clap and Co<span>Service you better</span></a></h2>
                        <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        <ul class="social-fo">
                            <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class=" address">
                            <div class="col-md-4 fo-grid1">
                                    <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                            </div>
                            <div class="col-md-4 fo-grid1">
                                    <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>	
                            </div>
                            <div class="col-md-4 fo-grid1">
                                <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                            </div>
                            <div class="clearfix"></div>

                            </div>
                    </div>
                <div class="copy-right">
                    <p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
                </div>
            </div>
        </div>
        <!-- //footer-->

        
        
        <!-- smooth scrolling -->
        <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */								
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <!-- for bootstrap working -->
            <script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
        <!-- //for bootstrap working -->
        <script type='text/javascript' src="{{ URL::asset('assets/js/jquery.mycart.js')}}"></script>
        <script type="text/javascript">
        $(function () {

        var goToCartIcon = function($addTocartBtn){
          var $cartIcon = $(".my-cart-icon");
          var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
          $addTocartBtn.prepend($image);
          var position = $cartIcon.position();
          $image.animate({
            top: position.top,
            left: position.left
          }, 500 , "linear", function() {
            $image.remove();
          });
        }

        $('.my-cart-btn').myCart({
          classCartIcon: 'my-cart-icon',
          classCartBadge: 'my-cart-badge',
          affixCartIcon: true,
          checkoutCart: function(products) {
            $.each(products, function(){
              console.log(this);
            });
          },
          clickOnAddToCart: function($addTocart){
            goToCartIcon($addTocart);
          },
          getDiscountPrice: function(products) {
            var total = 0;
            $.each(products, function(){
              total += this.quantity * this.price;
            });
            return total * 1;
          }
        });

        });
        </script>
        <!-- jQuery 3.1.1 -->
        <script src="{{URL::asset('admin/plugins/jQuery/jquery-3.1.1.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>

        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{URL::asset('admin/plugins/morris/morris.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{URL::asset('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- jvectormap -->
        <script src="{{URL::asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{URL::asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{URL::asset('admin/plugins/knob/jquery.knob.js')}}"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="{{URL::asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- datepicker -->
        <script src="{{URL::asset('admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <!-- Slimscroll -->
        <script src="{{URL::asset('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{URL::asset('admin/plugins/fastclick/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{URL::asset('admin/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{URL::asset('admin/dist/js/pages/dashboard.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{URL::asset('admin/dist/js/demo.js')}}"></script>
    </body>
</html>