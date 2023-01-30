<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7ad2ab711e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('public/frontend/admin/css/main.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>



    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__logo">LOGO</div>
                        <div class="left__profile">

                            <div class="left__image"><img src="{{asset('public/frontend/admin/images/avatar.jpeg')}}" alt=""></div>
                            <p class="left__name">
                                <?php
                                  $name = Session::get('admin_name');
                                  if ($name) {
                                      echo $name;
                                  }    
                                ?>
                            </p>
                            
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="index.html" class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-dashboard.svg')}}" alt="">Dashboard</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-tag.svg')}}" alt="">Sản Phẩm<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('/add-product')}}">Thêm Sản Phẩm</a>
                                    <a class="left__link" href="{{URL::to('/all-product')}}">Xem Sản Phẩm</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-edit.svg')}}" alt="">Danh Mục Sản Phẩm<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('/add-category-product')}}">Thêm Danh Mục</a>
                                    <a class="left__link" href="{{URL::to('/all-category-product')}}">Xem Danh Mục</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-book.svg')}}" alt="">Thể Loại Theo Mùa<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="{{URL::to('/add-brand-product')}}">Chèn TL Theo Mùa</a>
                                    <a class="left__link" href="{{URL::to('/all-brand-product')}}">Xem TL Theo Mùa</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="{{URL::to('/manage-order')}}" class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-book.svg')}}" alt="">Đơn Đặt Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-settings.svg')}}" alt="">Slide<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_slide.html">Chèn Slide</a>
                                    <a class="left__link" href="view_slides.html">Xem Slide</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-book.svg')}}" alt="">Coupons<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_coupon.html">Chèn Coupon</a>
                                    <a class="left__link" href="view_coupons.html">Xem Coupons</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="view_customers.html" class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-users.svg')}}" alt="">Khách Hàng</a>
                            </li>
                            
                            
                            <li class="left__menuItem">
                                <div class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-user.svg')}}" alt="">Admin<img class="left__iconDown" src="{{asset('public/frontend/admin/assets/arrow-down.svg')}}" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_admin.html">Chèn Admin</a>
                                    <a class="left__link" href="view_admins.html">Xem Admins</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                            <a href="{{URL::to('/logout')}}" class="left__title"><img src="{{asset('public/frontend/admin/assets/icon-logout.svg')}}" alt="">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    @yield('admin_content')
    </div>

    <script src="{{('public/frontend/admin/js/main.js')}}"></script>
</body>
</html>