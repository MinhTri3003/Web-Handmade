@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">


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
<link rel="stylesheet" href="{{asset('public/frontend/view/css/flexslider.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/jquery.mobile-menu.cs')}}s">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/view/css/style.css')}}" media="all">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<div class="main-container col1-layout">
    <div class="main container">
    <div class="col-main">
      <div class="row">
        <div class="product-view">
            
                
            
          <div class="product-essential">
              @foreach ($product_details as $key => $value)
              
            
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
              <div class="product-img-box col-sm-5 col-xs-12 bounceInRight animated">
                <div class="new-label new-top-left"> New </div>
                <div class="product-image">
                  <div class="large-image"> <a href="" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img alt="Thumbnail" src="{{URL::to('public/uploads/product/'.$value->product_image)}}"> </a> </div>
                  <div class="flexslider flexslider-thumb">
                    <ul class="previews-list slides">
                      {{-- <li><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/public/frontend/view/products-images/product6.jpg' "><img src="{{URL::to('public/frontend/view/products-images/product6.jpg')}}" alt = "Thumbnail 1"/></a></li>
                      <li><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/public/frontend/view/products-images/product10.jpg' "><img src="{{URL::to('public/frontend/view/products-images/product10.jpg')}}" alt = "Thumbnail 2"/></a></li>
                      <li><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/public/frontend/view/products-images/product3.jpg' "><img src="{{URL::to('public/frontend/view/products-images/product3.jpg')}}" alt = "Thumbnail 1"/></a></li>
                      <li><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/public/frontend/view/products-images/product4.jpg' "><img src="{{URL::to('public/frontend/view/products-images/product4.jpg')}}" alt = "Thumbnail 2"/></a></li>
                      <li><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/public/frontend/view/products-images/product5.jpg' "><img src="{{URL::to('public/frontend/view/products-images/product5.jpg')}}" alt = "Thumbnail 2"/></a></li> --}}
                    </ul>
                  </div>
                </div>
                <!-- end: more-images --> 
              </div>
              <div class="product-shop col-sm-7 col-xs-12 bounceInUp animated">
              
                <div class="product-name">
                  <h1>{{$value->product_name}}</h1>
                </div>
                <div class="short-description"> 
                  <!--<h2>Quick Overview mo ta</h2>-->
                  <p>M?? ID: {{$value->product_id}} </p>
                  <p>{{$value->product_desc}}</p>
                </div>
                <div class="ratings">
                  <div class="rating-box">
                    <div style="width:60%" class="rating"></div>
                  </div>
                  <p class="rating-links"> <a href="">1 Review(s)</a> <span class="separator">|</span> <a href="#"></a> </p>
                </div>
                
                <div class="price-block">
                  <div class="price-box">
                    <!--<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>-->
                    <p class="special-price"> <span class="price-label"></span> <span id="product-price-48" class="price"> {{number_format($value->product_price).'VN??'}} </span> </p>
                  </div>
                </div>
                <div class="add-to-box">
                  <form action="{{URL::to('/save-cart')}}" method="POST">
                    {{ csrf_field() }}
                  <div class="add-to-cart">
                    
                    <label for="qty">S??? l?????ng:</label>
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        <input type="number" class="input-text qty"  min="1" value="1" id="qty" name="qty">
                        <input type="hidden" class="input-text qty"   value=" {{$value->product_id}}" id="qty" name="productid_hidden">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                      </div>
                    </div>
      
                      <button  class="button btn-cart" title="Add to Cart" type="submit"><span><i class="icon-basket"></i> Th??m v??o gi??? h??ng</span></button>
                    </form>
                  </div>
                  <div class="email-addto-box">
                   
                    <ul class="add-to-links">
                      <li> <a class="link-wishlist" href="wishlist.html"><span>Y??u th??ch</span></a></li>
                      <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>So s??nh</span></a></li>
                    
                  </div>
                
                </div>
              </div>
              
            
          </div>
              
         
          <div class="product-collateral col-sm-12 col-xs-12 bounceInUp animated">
            <div class="add_info">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> M?? t??? s???n ph???m </a> </li>
                <li> <a href="#reviews_tabs" data-toggle="tab">????nh gi??</a> </li>
                
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="product_tabs_description">
                  <div class="std">
                    <p>{!!$value->product_content!!}</p>
                    <p></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_tags">
                  <div class="box-collateral box-tags">
                    <div class="tags">
                      <form id="addTagForm" action="#" method="get">
                        <div class="form-add-tags">
                          <label for="productTagName">Add Tags:</label>
                          <div class="input-box">
                            <input class="input-text" name="productTagName" id="productTagName" type="text">
                            <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                          </div>
                          <!--input-box--> 
                        </div>
                      </form>
                    </div>
                    <!--tags-->
                    <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="reviews_tabs">
                  <div class="box-collateral box-reviews" id="customer-reviews">
                    <div class="box-reviews1">
                      <div class="form-add">
                        <form id="review-form" method="post" action="h">
                          <h3>Write Your Own Review</h3>
                          <fieldset>
                            <h4>How do you rate this product? <em class="required">*</em></h4>
                            <span id="input-message-box"></span>
                            <table id="product-review-table" class="data-table">
                              
                              <thead>
                                <tr class="first last">
                                  <th>&nbsp;</th>
                                  <th><span class="nobr">1 *</span></th>
                                  <th><span class="nobr">2 *</span></th>
                                  <th><span class="nobr">3 *</span></th>
                                  <th><span class="nobr">4 *</span></th>
                                  <th><span class="nobr">5 *</span></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="first odd">
                                  <th>Price</th>
                                  <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                </tr>
                                <tr class="even">
                                  <th>Value</th>
                                  <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                </tr>
                                <tr class="last odd">
                                  <th>Quality</th>
                                  <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                </tr>
                              </tbody>
                            </table>
                            <input type="hidden" value="" class="validate-rating" name="validate_rating">
                            <div class="review1">
                              <ul class="form-list">
                                <li>
                                  <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                  <div class="input-box">
                                    <input type="text" class="input-text" id="nickname_field" name="nickname">
                                  </div>
                                </li>
                                <li>
                                  <label class="required" for="summary_field">Summary<em>*</em></label>
                                  <div class="input-box">
                                    <input type="text" class="input-text" id="summary_field" name="title">
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="review2">
                              <ul>
                                <li>
                                  <label class="required label-wide" for="review_field">Review<em>*</em></label>
                                  <div class="input-box">
                                    <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                  </div>
                                </li>
                              </ul>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                    <div class="box-reviews2">
                      <h3>Customer Reviews</h3>
                      <div class="box visible">
                        <ul>
                          <li>
                            <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#">Excellent</a></h6>
                              <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                              <div class="review-txt"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                            </div>
                          </li>
                          <li class="even">
                            <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:80%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                              <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                              <div class="review-txt"> Minimalism is the online ! </div>
                            </div>
                          </li>
                          <li>
                            <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:80%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                              <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                              <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_custom">
                  <div class="product-tabs-content-inner clearfix">
                    <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                      simply dummy text of the printing and typesetting industry. Lorem Ipsum
                      has been the industry's standard dummy text ever since the 1500s, when 
                      an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the 
                      leap into electronic typesetting, remaining essentially unchanged. It 
                      was popularised in the 1960s with the release of Letraset sheets 
                      containing Lorem Ipsum passages, and more recently with desktop 
                      publishing software like Aldus PageMaker including versions of Lorem 
                      Ipsum.</span></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="product_tabs_custom1">
                  <div class="product-tabs-content-inner clearfix">
                    <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                      
                      Lorem Ipsumis
                      simply dummy text of the printing and typesetting industry. Lorem Ipsum
                      has been the industry's standard dummy text ever since the 1500s, when 
                      an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries, but also the 
                      leap into electronic typesetting, remaining essentially unchanged. It 
                      was popularised in the 1960s with the release of Letraset sheets 
                      containing Lorem Ipsum passages, and more recently with desktop 
                      publishing software like Aldus PageMaker including versions of Lorem 
                      Ipsum.</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="related-slider col-lg-12 col-xs-12 bounceInDown animated">
            <div class="slider-items-products">
              <div class="slider-items-products">
              <div class="new_title center">
        <h2>S???n ph???m t????ng t???</h2>
      </div>     
                  <div id="related-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
            <!-- Item -->
            @foreach ($relate as $key =>$lienquan)
                
            
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" title="Sample Product" href="{{URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}"> <img alt="Sample Product" src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}"></a>
                    <div class="item-box-hover">
                      <div class="box-inner">                                        
                                        <div class="actions">
                                        <div class="add_cart">
                                          <form action="{{URL::to('/save-cart')}}" method="post">
                    {{ csrf_field() }}
                                          <button class="button btn-cart" type="button" title="Th??m gi??? h??ng"><span>Th??m gi??? h??ng</span></button>
                                        </form>
                                        </div>
                                        <div class="product-detail-bnt"><a href="" class="button detail-bnt" title="Xem s???n ph???m"><span>Xem s???n ph???m</span></a></div> <span class="add-to-links"><a href="" class="link-wishlist" title="Y??u th??ch"><span>Y??u th??ch</span></a> 
 <a href="" class="link-compare add_to_compare" title="So s??nh" ><span>So s??nh</span></a></span> </div>
                                      </div>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"> <a title="Sample Product" href="">{{$lienquan->product_name}}</a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div style="width:30%" class="rating"></div>
                          </div>
                          <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">/a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box">
              
                          <p class="special-price"> <span class="price-label">Gi?? b??n</span> <span id="product-price-2" class="price">{{number_format($lienquan->product_price).'VN??'}}</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- End Item --> 
            
            
            
          </div>
                  </div>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Main Container End --> 
  
  
<!-- JavaScript --> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/parallax.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/common.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/owl.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.flexslider.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/jquery.mobile-menu.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/frontend/view/js/cloud-zoom.js')}}"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>
@endsection