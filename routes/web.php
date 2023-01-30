<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu','HomeController@index');
//Tim kiem
Route::post('/tim-kiem','HomeController@search');
//danh muc san pham trang chu
Route::get('/danh-muc-san-pham/{catogory_id}','CategoryProduct@show_category_home');
//danh muc the loai mua trang chu
Route::get('/the-loai-san-pham/{brand_id}','BrandProduct@show_brand_home');
//chi tiet san pham 
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@details_product');
//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
//Sua danh mục
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
//Delete danh mục
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
//Ẩn/hiện danh mục
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
//Thêm danh mục
Route::post('/save-category-product','CategoryProduct@save_category_product');
//Update danh muc
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

// The loai theo mua(BrandProduct)
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
//Sua danh mục
Route::get('/edit-brand-product/{brand_id}','BrandProduct@edit_brand_product');
//Delete danh mục
Route::get('/delete-brand-product/{brand_id}','BrandProduct@delete_brand_product');
//Ẩn/hiện danh mục
Route::get('/unactive-brand-product/{brand_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_id}','BrandProduct@active_brand_product');
//Thêm danh mục
Route::post('/save-brand-product','BrandProduct@save_brand_product');
//Update danh muc
Route::post('/update-brand-product/{brand_id}','BrandProduct@update_brand_product');


//San pham
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//Cart
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');

//checkout
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');
//order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');
