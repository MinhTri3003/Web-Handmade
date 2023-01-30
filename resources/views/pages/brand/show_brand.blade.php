@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />


<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
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

<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">

  <div class="container">
    <div class="row">
      <div class="col-main col-sm-12 ">
        <article class="col-main">
          <div class="page-header">
            <div class="container">
              <div class="row">
            <div class="col-xs-12" >
               
                @foreach ($brand_name as $key => $name)
                <h3 style="text-align: center;">{{$name->brand_name}}</h3>
                @endforeach
            </div>
            </div>
            </div>
            </div>
          
          <div class="toolbar">
            <div class="sorter">
                <div class="view-mode"><span title="List" class="button button-active button-list">&nbsp;</span>&nbsp; </div>
              </div>
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="category-products">
            
            <ol class="products-list" id="products-list">
              
              @foreach ($brand_by_id as $key =>$product)
                  
              
          <li class="item first">
            <div class="product-image"> <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title="Sample Product"> <img class="small-image" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="Sample Product"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title="Sample Product">{{$product->product_name}}</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p>{{$product->product_desc}} </p>
                <p>{{$product->product_content}} <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
               <!--<p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price">  </span> </p> --> 
                <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> {{number_format($product->product_price).' '.'VNĐ'}} </span> </p>
              </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
        
          @endforeach
          
          
        </ol>
        
          </div>
        </article>
        <!--	///*///======    End article  ========= //*/// --> 
      
</section>



<!-- End Footer --> 
<!-- JavaScript -->
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/common.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.mobile-menu.min.js')}}"></script> 
</body>

<!-- Tieu Long Lanh Kute -->
</html>
@endsection