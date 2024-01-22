<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Village mart </title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-color.css">
    
    <!--paypal-->
    <link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/webstatic/en_US/developer/docs/css/cardfields.css"
  />
</head>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a></li>
                        <li><a href="#">Free Shipping for all Order of $99</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <li class="horz-menu-item currency">
                            <select name="currency">
                                <option value="eur">€ EUR (Euro)</option>
                                <option value="usd" selected>$ USD (Dollar)</option>
                                <option value="usd"> GBP (Pound)</option>
                                <option value="usd">¥ JPY (Yen)</option>
                            </select>
                        </li>
                        <li class="horz-menu-item lang">
                            <select name="language">
                                <option value="fr">French (EUR)</option>
                                <option value="en" selected>English (USD)</option>
                                <option value="ger">Germany (GBP)</option>
                                <option value="jp">Japan (JPY)</option>
                            </select>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="index-2.html" class="biolife-logo"><img src="assets/images/logo/logo.png" alt="biolife logo" width="135" height="34"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                                <li class="menu-item"><a href="index-2.html">Home</a></li>
                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name" data-title="Shop" >Shop</a>
                                    <div class="wrap-megamenu lg-width-900 md-width-750">
                                        <div class="mega-content">  
                                        </div>
                                    </div>
                                </li> 
                          </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                            
                         
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
    </header>

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Shipping</span></li>
            </ul>
        </nav>
    </div>
    @include('sweetalert::alert')
    <div class="page-contain checkout">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container sm-margin-top-37px">
                <div class="row">

                    <!--checkout progress box-->
          <form method="POST"     action="{{Route ('Addorder',['price' =>00,'product' =>""]) }}"   >   
            @csrf     
        <div class="card">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
               <div class="card-body">
               <h3>Basic details</h3>
              <hr>
                  <div class="row checkout-form">
                 <div class="col-md-6">
                <label for="First Name">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="enter first name" required>
              </div>
              <div class="col-md-6">
                <label for="Last Name">Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder="enter last name"   required>
              </div>
              <div class="col-md-6  mt-3">
                <label for="Email Id">Email Id</label>
                <input type="email" class="form-control" name="email" placeholder="example123@gmail.com"  required>
              </div> 
               <div class="col-md-6  mt-3">
                <label for="Mobile">Mobile Number</label>
                <input type="text" class="form-control" name="mobile" maxlength="10" placeholder="xxxxxx1234"  required>
              </div>
              <div class="col-md-6  mt-3">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="house name/No"  required>
              </div>
           
              <div class="col-md-6  mt-3">
                <label for="Area">Area</label>
                <input type="text" class="form-control" name="area" placeholder="" required >
              </div>
              <div class="col-md-6  mt-3">
                <label for="post office">post office</label>
                <input type="text" class="form-control" name="post" placeholder="">
              </div>
              <div class="col-md-6  mt-3">
                <label for="Pincode">City</label>
                <input type="text" class="form-control" name="city" placeholder="" required >
              </div>
              <div class="col-md-6  mt-3">
                <label for="Pincode">Pincode</label>
                <input type="text" class="form-control" name="pin" placeholder="" required>
              </div>
              <div class="col-md-6  mt-3">
                <label for="District">District</label>
                <input type="text" class="form-control" name="district" placeholder="" required>
              </div>
              <div class="col-md-6  mt-3">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" placeholder="" required >
              </div>
              <div class="col-md-6  mt-3">
                <label for="Country">Country</label>
                <input type="text" class="form-control" name="con" placeholder=""  required>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type='hidden' name="total"  value="{{ Session::get("name")}}">
                <input type='hidden' name="name" value="{{ Session::get("total")}}" >
              </div>
          
               
                </div>
                </div> 
                </div>
        
                 </form>

                    <!--Order Summary-->

              
        
                                
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                        <div class="order-summary sm-margin-bottom-80px">
                            <div class="title-block">
                                <h3 class="title">Order Summary</h3>
                            </div>
                          
                            <div class="cart-list-box short-type">
                                
                                <ul class="cart-list">
                                    @php $total = 0 @endphp

                                @if(session('cart'))
                        
                                    @foreach(session('cart') as $id => $items)
                                    
                                    @php $total += $items['price'] * $items['quantity'] @endphp
                                    <li class="cart-elem">
                                      
                                        <div class="cart-item">
                                        
                                            <div class="product-thumb">
                                                <a class="prd-thumb" href="#">
                                                   
                                                </a>
                                             </div>
                                              <div class="info">
                                               <ol> <li type="1"><a href="#" class="pr-name">{{ $items->name}} </a> </li> </ol> 
                                                <hr>
                                               </div>
                                               
                                              <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span>₹{{ $items->price}}.00 </span></ins>
                                                @endforeach
                                                @endif
                                            </div>
                                         
                                        </div>
                                    </li>
                                </ul>
                             
                                    <div class="subtotal-line">
                                        <b class="stt-name">Packing Charge</b>
                                        <span class="stt-price">25.00</span>
                                    </div>
                         
                              
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tax</b>
                                        <span class="stt-price">0.55</span>
                                    </div>
                              
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Subtotal</b>
                                            <span  style="color: darkgreen"  class="stt-price"> ₹{{ $total+25+0.55 }}</span>
                                         
                                        </div>
                                     
                                    </li>
                                    
                                   
                                   
                                </ul>
                                <div id="paypal-button-container"></div>
                               
                                <div class="btn">
                              
                                       
                                        <button  style="size: 200px" class="btn-lg btn-success ">Place Order</button>
                                        </form>
                                    
                            </div>
                        </div>
                    </div>
                    
                

                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <section class="footer-item">
                            <a href="#" class="logo footer-logo"><img src="assets/images/logo/logo.png" alt="biolife logo" width="135" height="34"></a>
                           
                            <div class="newsletter-block layout-01">
                                <h4 class="title">Newsletter Signup</h4>
                                <div class="form-content">
                                    <form action="#" name="new-letter-foter">
                                        <input type="email" class="input-text email" value="" placeholder="Your email here...">
                                        <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Useful Links</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">About Our Shop</a></li>
                                            <li><a href="#">Secure Shopping</a></li>
                                            <li><a href="#">Delivery infomation</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Our Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Who We Are</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Contacts Us</a></li>
                                            <li><a href="#">Innovation</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Transport Offices</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                       
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">Email:  contact@company.com</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-70px xs-margin-top-40px"></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                       <div class="copy-right-text"><p><a href="templateshub.net">Templates Hub</a></p></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="payment-methods">
                            <ul>
                                <li><a href="#" class="payment-link"><img src="assets/images/card1.jpg" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="assets/images/card2.jpg" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="assets/images/card3.jpg" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="assets/images/card4.jpg" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="assets/images/card5.jpg" width="51" height="36" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Global</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
              
            </div>
            <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                    <li class="list-item"><a href="#"> GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="assets/images/languages/us.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/fr.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/ger.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/jap.jpg" alt="flag" width="24" height="18"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    <script src="https://www.paypal.com/sdk/js?components=buttons,card-fields&client-id=<%= clientId %>"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>