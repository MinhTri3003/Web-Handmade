<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>Trang chủ</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/font-awesome.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/animate.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/revslider.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/jquery.mobile-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/style.css')}}" media="all">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="" href="index.html"><img alt="" src="{{('public/frontend/view/images/logo.png')}}"></a></div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-lg-9 col-xs-12 right_menu">
            <div class="toplinks"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Chào mừng bạn đến với Shop! </div>
              <!-- End Default Welcome Message -->
              <div class="links">
                <div class="myaccount"><a title="My Account" href="{{URL::to('/login-checkout')}}"><span class="hidden-xs">Tài khoản</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Yêu thích</span></a></div>
                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id!=NULL) {
                  
                  ?>
                  <div class="check"><a title="Checkout" href="{{URL::to('/checkout')}}"><span class="hidden-xs">Thanh toán</span></a></div>
           <?php
           }else {
             ?>
            <div class="login"><a href="{{URL::to('/login-checkout')}}"><span class="hidden-xs">Đăng nhập</span></a></div>
            <?php
           }
           ?>
            
            <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id!=NULL) {
                  
                  ?>
                  <div class="login"><a href="{{URL::to('/logout-checkout')}}"><span class="hidden-xs">Đăng xuất</span></a></div>
           <?php
           }else {
             ?>
            <div class="login"><a href="{{URL::to('/login-checkout')}}"><span class="hidden-xs">Đăng nhập</span></a></div>
            <?php
           }
           ?>
              </div>
              <!-- links --> 
            </div>
            <!-- Search-col -->
            <div class="search-box pull-right">
              <form action="{{URL::to('/tim-kiem')}}" method="POST" id="search_mini_form" name="Categories">
                {{ csrf_field() }}
                <input type="text" placeholder="Tìm kiếm sản phẩm" maxlength="70" name="keywords_submit" id="search">
                <button type="submit" class="search-btn-bg"  name="search_items"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
              </form>
            </div>
            <!-- End Search-col --> 
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu active"><a href="{{URL::to('/')}}"><span>Trang chủ</span></a>
            </li>
            <li class="mega-menu"><a href="" class="level-top"><span>Loại sản phẩm</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                         @foreach ($category as $key => $cate)
                             
                        
                          <li class="level1 nav-6-1 parent item"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class=""><span>{{$cate->category_name}}</span></a>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
                  </div>
                  <!--level0-wrapper2--> </div>
              </div>
            </li>
            <li class="mega-menu"><a href="" class="level-top"><span class="level-top">Sản phẩm theo ngày lễ</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          @foreach ($brand as $key =>$brand)
                          <li class="level1 nav-6-1 parent item"><a href="{{URL::to('/the-loai-san-pham/'.$brand->brand_id)}}" class=""><span>{{$brand->brand_name}}</span></a>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <!--nav-block nav-block-center-->
                  </div>
                  <!--level0-wrapper2--> </div>
              </div>
            </li>
            <!-- <li class="mega-menu"><a href="grid.html" class="level-top"><span>Loại sản phẩm</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="grid.html" class=""><span>Stylish Bag</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Material Bag</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Shoes</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Jwellery</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Dresses</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.html"><span>Swimwear</span></a>
                            <div class="menu_image"><a href="#" title=""><img src="images/menu_image.jpg" alt="menu_image"></a></div>
                          </li>
                        </ul>
                      </div>
                    </div>
              </div>
            </li> -->
            <li class="level0 nav-8 level-top"><a href="" class="level-top"><span>Giới Thiệu</span></a></li>
            <li class="level0 nav-8 level-top"><a href="" class="level-top"><span>Liên Hệ</span></a></li>
            
              
            </li>
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="{{URL::to('/show-cart')}}"><span class="hidden-xs">Giỏ Hàng</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">Tổng tiền <span class="price">{{Cart::subtotal().' '.'VNĐ'}}</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><span><a href="{{URL::to('/show-cart')}}">Xem giỏ hàng</a></span></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <?php
                   $content =Cart::content();
          
                    ?>
                    <!--block-subtitle-->
                    
                    <ul class="mini-products-list" id="cart-sidebar">
                      @foreach ($content as $v_content)
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href=""><img alt="Sample Product" src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Xóa sản phẩm" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">Xóa</a> </div>
                            <!--access--> <strong>{{$v_content->qty}}</strong> x <span class="price">{{number_format($v_content->price).' '.'VNĐ'}}</span>
                            <p class="product-name"><a href="">{{$v_content->name}}</a></p>
                          </div>
                        </div>
                      </li>
                      @endforeach
                      
                      
                      
                    </ul>
                    
                    <!--actions--> 
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 


<section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title">
            <h2>Giỏ hàng</h2>
          </div>
          <div class="table-responsive">
            
              <input type="hidden" value="" name="form_key">
              <fieldset>
                <?php
            $content =Cart::content();
          
            ?>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                      
                      <th colspan="1" class="a-center"><span class="nobr">Giá</span></th>
                      <th class="a-center " rowspan="1">Số lượng</th>
                      <th colspan="1" class="a-center">Tổng tiền</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="8">
                        <a href="{{URL::to('/')}}"><button class="button btn-continue" title="Continue Shopping" type="button"><span>Tiếp tục mua hàng</span></button></a>
                        <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                          {{ csrf_field() }}
   
                         
                         <button class="button btn-update" name="update_qty" title="Cập nhập giỏ hàng" value="Cập nhập"  type="submit"><span>Cập nhập giỏ hàng</span></button>
                          
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($content as $v_content)
                        
                    
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="Sample Product" href=""><img width="75"  src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" ></a></td>
                      <td><h2 class="product-name"> <a href="">{{$v_content->name}}</a> </h2><span>{{'ID: '.$v_content->id}}</span></td>
                      
                      
                      <td class="a-center hidden-table"><span class="cart-price"> <span class="price">{{number_format($v_content->price).' '.'VNĐ'}}</span> </span></td>
                      
                      <td class="a-center movewishlist"><input type="text" class="input-text qty"  value="{{$v_content->qty}}" name="cart_quantity">
                      <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                    
                      </td>
                    </form> 
                      <td class="a-center movewishlist"><span class="cart-price"> <span class="price">
                        <?php
                          $subtotal = $v_content->price* $v_content->qty;
                          echo number_format($subtotal).' '.'VNĐ';
                          ?>
                      
                      </span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Xóa sản phẩm" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><span><span>Xóa sản phẩm</span></span></a></td>
                    </tr>
                   
                  </tbody>
                  @endforeach
                </table>
              </fieldset>
            
          </div>
          <!-- BEGIN CART COLLATERALS -->
           <div class="cart-collaterals row">
            <div class="col-sm-4">
              {{-- <div class="shipping">
                <h3>Estimate Shipping and Tax</h3>
                <div class="shipping-form">
                  <form id="shipping-zip-form" method="post" action="">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <ul class="form-list">
                      <li>
                        <label class="required" for="country"><em>*</em>Country</label>
                        <div class="input-box">
                          
                          <input type="text" style="display:none;" class="input-text" title="State/Province" name="region" id="region">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Zip/Postal Code</label>
                        <div class="input-box">
                          <input type="text" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                    </ul>
                    <div class="buttons-set11">
                      <button class="button get-quote" title="Get a Quote" type="button"><span>Get a Quote</span></button>
                    </div> 
                    <!--buttons-set11-->
                  </form>
                </div>
              </div> --}}
            </div>
            <div class="col-sm-4">
              {{-- <div class="discount">
                <h3>Discount Codes</h3>
                <form method="post" action="#" id="discount-coupon-form">
                  <label for="coupon_code">Enter your coupon code if you have one.</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                </form>
              </div> --}}
            </div>
            <div class="totals col-sm-4">
              <h3>Tổng tiền thanh toán</h3>
              <div class="inner">
                <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                  
                  <tfoot>
                    <tr>
                      <td colspan="1" class="a-left"><strong>Tổng</strong></td>
                      <td class="a-right"><strong><span class="">{{Cart::subtotal().' '.'VNĐ'}}</span></strong></td>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td colspan="1" class="a-left"> Thành tiền </td>
                      <td class="a-right"><span class="">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
                    </tr>
                  </tbody>
                </table>
                <ul class="checkout">
                  <?php
                    $customer_id = Session::get('customer_id');
                    if ($customer_id!=NULL) {
                      
                      ?>
                      <li>
                        <a href="{{URL::to('/checkout')}}"><button class="button btn-proceed-checkout" title="Proceed to Checkout" type="submit"><span>Thanh toán</span></button></a>
                      </li>
               <?php
               }else {
                 ?>
                <li>
                  <a href="{{URL::to('/login-checkout')}}"><button class="button btn-proceed-checkout" title="Proceed to Checkout" type="submit"><span>Thanh toán</span></button></a>
                </li>
                <?php
               }
               ?>
                  
                
                 
                 
                </ul>
              </div>
              <!--inner--> 
              
            </div>
          </div>


<!-- Footer -->
<footer>
    <section class="footer-navbar">
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-8">
              <div class="footer-column pull-left collapsed-block">
                <h4>Shopping Guide<a class="expander visible-xs" href="#TabBlock-1">+</a></h4>
                <div class="tabBlock" id="TabBlock-1">
                  <ul class="links">
                    <li class="first"><a href="#" title="How to buy">How to buy</a></li>
                    <li><a href="faq.html" title="FAQs">FAQs</a></li>
                    <li><a href="#" title="Payment">Payment</a></li>
                    <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
                    <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                    <li class="last"><a href="#" title="Return policy">Return policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-column pull-left collapsed-block">
                <h4>Style Advisor<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                <div class="tabBlock" id="TabBlock-2">
                  <ul class="links">
                    <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
                    <li><a title="Information" href="#">Information</a></li>
                    <li><a title="Addresses" href="#">Addresses</a></li>
                    <li><a title="Addresses" href="#">Discount</a></li>
                    <li><a title="Orders History" href="#">Orders History</a></li>
                    <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-column pull-left collapsed-block">
                <h4>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                <div class="tabBlock" id="TabBlock-3">
                  <ul class="links">
                    <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
                    <li><a href="#" title="Search Terms">Search Terms</a></li>
                    <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                    <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                    <li><a href="#" title="Suppliers">Suppliers</a></li>
                    <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-4">
              <div class="footer-column-last">
                <div class="newsletter-wrap collapsed-block">
                  <h4>Sign up for emails<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                  <div class="tabBlock" id="TabBlock-4">
                    <form id="newsletter-validate-detail" method="post" action="#">
                      <div id="container_form_news">
                        <div id="container_form_news2">
                          <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onfocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                          <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="social">
                  <h4>Follow Us</h4>
                  <ul class="link">
                    <li class="fb pull-left"><a href="#"></a></li>
                    <li class="tw pull-left"><a href="#"></a></li>
                    <li class="googleplus pull-left"><a href="#"></a></li>
                    <li class="rss pull-left"><a href="#"></a></li>
                    <li class="pintrest pull-left"><a href="#"></a></li>
                    <li class="linkedin pull-left"><a href="#"></a></li>
                    <li class="youtube pull-left"><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div style="text-align:center"><a href="index.html"><img src="images/footer-logo.png" alt="footer-logo"></a></div>
            <address>
            <i class="icon-location-arrow"></i> 123 Main Street, Anytown, CA 12345  USA <i class="icon-mobile-phone"></i><span> +(408) 394-7557</span> <i class="icon-envelope"></i><a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a>
            </address>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. All Rights Reserved.</div>
            <div class="col-sm-7 col-xs-12 company-links">
              <ul class="links">
                <li><a title="Magento Themes" href="#">Magento Themes</a></li>
                <li><a title="Premium Themes" href="#">Premium Themes</a></li>
                <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
                <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>

<div id="mobile-menu">
  <div class="mm-search">
    <form name="search">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn-default" type="submit"><i class="icon-search"></i></button>
        </div>
        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
      </div>
    </form>
  </div>
  <ul>
    <li> </li>
    <li>
      <div class="home"><a href="index.html"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a></li>
        <li> <a href="list.html">List</a></li>
        <li> <a href="product_detail.html">Product Detail</a></li>
        <li> <a href="shopping_cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
        <li> <a href="about_us.html">About us</a></li>
        <li><a href="compare.html">Compare</a></li>
 	   <li><a href="faq.html">FAQ</a></li>
        <li><a href="quick_view.html">Quick view</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog_detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="grid.html">Women</a>
      <ul>
        <li> <a href="grid.html" class="">Stylish Bag</a>
          <ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
            <li> <a href="grid.html" class="">Diaper Bags</a></li>
            <li> <a href="grid.html" class="">Bags</a></li>
            <li> <a href="grid.html" class="">Hobo handbags</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Material Bag</a>
          <ul>
            <li> <a href="grid.html">Beaded Handbags</a></li>
            <li> <a href="grid.html">Fabric Handbags</a></li>
            <li> <a href="grid.html">Handbags</a></li>
            <li> <a href="grid.html">Leather Handbags</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Shoes</a>
          <ul>
            <li> <a href="grid.html">Flat Shoes</a></li>
            <li> <a href="grid.html">Flat Sandals</a></li>
            <li> <a href="grid.html">Boots</a></li>
            <li> <a href="grid.html">Heels</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Jwellery</a>
          <ul>
            <li> <a href="grid.html">Bracelets</a></li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li> <a href="grid.html">Pendants</a></li>
            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Dresses</a>
          <ul>
            <li> <a href="grid.html">Casual Dresses</a></li>
            <li> <a href="grid.html">Evening</a></li>
            <li> <a href="grid.html">Designer</a></li>
            <li> <a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Swimwear</a>
          <ul>
            <li> <a href="grid.html">Swimsuits</a></li>
            <li> <a href="grid.html">Beach Clothing</a></li>
            <li> <a href="grid.html">Clothing</a></li>
            <li> <a href="grid.html">Bikinis</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Men</a>
      <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li> <a href="#/sunglasses.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Electronics</a>
      <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a></li>
            <li> <a href="grid.html"><span>Nokia</span></a></li>
            <li> <a href="grid.html"><span>IPhone</span></a></li>
            <li> <a href="grid.html"><span>Sony</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a></li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
            <li> <a href="grid.html"><span>IPods</span></a></li>
            <li> <a href="grid.html"><span>Speakers</span></a></li>
            <li> <a href="grid.html"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
            <li> <a href="grid.html"><span>Pendrives</span></a></li>
            <li> <a href="grid.html"><span>Headphones</span></a></li>
            <li> <a href="grid.html"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Furniture</a>
      <ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
            <li> <a href="grid.html">Sofas</a></li>
            <li> <a href="grid.html">Chairs</a></li>
            <li> <a href="grid.html">Tables</a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a></li>
            <li> <a href="grid.html">Serving Trolleys</a></li>
            <li> <a href="grid.html">Bar Counters</a></li>
            <li> <a href="grid.html">Dining Cabinets</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a></li>
            <li> <a href="grid.html">Chest of Drawers</a></li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
            <li> <a href="grid.html">Nightstands</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a></li>
            <li> <a href="grid.html">Kitchen Fillings</a></li>
            <li> <a href="grid.html">Wall Units</a></li>
            <li> <a href="grid.html">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Kids</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>

<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/parallax.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/revslider.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/common.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/owl.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.mobile-menu.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.bxslider.min.js')}}"></script> 
<script type='text/javascript'>
jQuery(document).ready(function(){
jQuery('#rev_slider_4').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 1170,
startheight: 650,

hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,

navigationType: 'thumb',
navigationArrows: 'solo',
navigationStyle: 'round',

touchenabled: 'on',
onHoverStop: 'on',

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

spinner: 'spinner0',
keyboardNavigation: 'off',

navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,

soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,

soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,

shadow: 0,
fullWidth: 'on',
fullScreen: 'off',

stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,

shuffle: 'off',

autoHeight: 'off',
forceFullWidth: 'on',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,

hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,

hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});

</script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>
