@extends('layout')
@section('content')
<div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
            <div class="top-b-text"><strong>Chậu hoa</strong></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner2">
            <div class="top-b-text"><strong>Thiệp mời</strong></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner3">
            <div class="top-b-text"><strong>Hộp quà</strong></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner4">
            <div class="top-b-text"><strong>Trang trí</strong></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- main container CHẬU -->
  <div class="main-col">
    <div class="container">
      <div class="row">
        <div class="product-grid-view">
          <div class="col-md-12">
            <div class="std">
              <div class="home-tabs wow bounceInUp animated">
                <div class="producttabs">
                  <div id="magik_producttabs1" class="magik-producttabs"> 
                    <!--<h3></h3>-->
                    <div class="magik-pdt-container"> 
                      <!--Begin Tab Nav -->
                      <div class="magik-pdt-nav">
                        <ul class="pdt-nav">
                          <!-- <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li> -->
                          <!-- <li class="item-nav" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">HÀNG MỚI</span></li> -->
                          <div class="new_title center">
                            <h2>Tìm kiếm</h2>
                          </div>
                        </ul>
                      </div>
                      <!-- End Tab Nav --> 
                      <!--Begin Tab Content -->
                      
                          
                      
                      <div class="magik-pdt-content wide-5">
                        <div class="pdt-content is-loaded pdt_best_sales tab-content-actived">
                          <ul class="pdt-list products-grid-home zoomOut play">
                            @foreach ($search_product as $key =>$product)
                            <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title="Sample Product" class="product-image"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt" title="Xem sản phẩm"><span>Xem sản phẩm</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Yêu thích"><span>Yêu thích</span></a> <a href="compare.html" class="link-compare add_to_compare" title="So sánh"><span>So sánh</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title="Sample Product">{{$product->product_name}}</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">{{number_format($product->product_price).' '.'VNĐ'}}</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                      
                      <!--end Tab Content -->
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
  <!-- end main container --> 
  </section>
  @endsection