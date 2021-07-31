<?php

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

Route::get('/', [
   'as' => 'index',
   'uses' => 'PageController@index'
]);

Route::get('/shop', [
   'as' => 'shop',
   'uses' => 'PageController@shop'
]);

Route::get('product-detail/{id}', [
   'as' => 'product-detail',
   'uses' => 'PageController@product_detail'
]);


Route::get('/contact', [
   'as' => 'contact',
   'uses' => 'PageController@contact'
]);

Route::get('login', [
   'as' => 'login',
   'uses' => 'AccountController@login'
]);

Route::post('/create-account', [
   'as' => 'create-account',
   'uses' => 'AccountController@create_account'
]);

Route::post('/login', [
   'as' => 'login',
   'uses' => 'AccountController@process_login'
]);

Route::get('/logout', [
   'as' => 'logout',
   'uses' => 'AccountController@logout'
]);

Route::post('/add-to-cart', [
   'as' => 'add-to-cart',
   'uses' => 'PageController@add_to_cart'
]);

Route::get('/show-cart', [
   'as' => 'show-cart',
   'uses' => 'PageController@showcart'
]);

Route::get('/checkout', [
    'as' => 'checkout',
    'uses' => 'PageController@checkout'
]);

Route::post('/checkout', [
   'as' => 'checkout',
   'uses' => 'PageController@process_checkout'
]);

Route::get('order-status', [
   'as' => 'order-status',
   'uses' => 'PageController@orderStatus'
]);

Route::get('profile', [
   'as' => 'profile',
   'uses' => 'PageController@profile'
]);

Route::post('review/{id}', [
   'as' => 'review',
   'uses' => 'PageController@review'
]);

Route::get('product-type/{id}', [
   'as' => 'product-type',
    'uses' => 'PageController@product_type'
]);


/*
 *
 * ADMIN SHOP VEGETABLE
 *
 */

Route::get('/admin', [
   'as' => 'admin',
   'uses' => 'AdminController@index'
]);


/*
 * Product Controller
 */

Route::get('admin/show-product', [
   'as' => 'show-product',
   'uses' => 'ProductController@show'
]);

Route::get('admin/add-product', [
   'as' => 'add-product',
   'uses' => 'ProductController@index'
]);

Route::post('admin/add-product', [
    'as' => 'add-product',
    'uses' => 'ProductController@store'
]);

Route::get('/admin/product/edit/{id}', [
   'as' => 'edit-product',
   'uses' => 'ProductController@edit'
]);

Route::post('/admin/product/update/{id}', [
   'as' => 'update-product',
   'uses' => 'ProductController@update'
]);

Route::get('/admin/product/delete/{id}', [
   'as' => 'delete-product',
   'uses' => 'ProductController@delete'
]);
/*
 * Category Controller
 */

Route::get('admin/show-category', [
   'as' => 'show-category',
   'uses' => 'CategoryController@show'
]);

Route::get('admin/add-category', [
   'as' => 'add-category',
   'uses' => 'CategoryController@index'
]);

Route::post('admin/add-category', [
   'as' => 'add-category',
   'uses' => 'CategoryController@store'
]);

Route::get('admin/category/edit/{id}', [
   'as' => 'edit-category',
   'uses' => 'CategoryController@edit'
]);

Route::post('admin/category/update/{id}', [
   'as' => 'update-category',
   'uses' => 'CategoryController@update'
]);

Route::get('admin/category/delete/{id}', [
   'as' => 'delete-category',
   'uses' => 'CategoryController@delete'
]);
/*
 * Bill Controller
 */

Route::get('admin/bills', [
   'as' => 'bills',
   'uses' => 'BillController@index'
]);

Route::get('admin/statistics', [
   'as' => 'statistics',
   'uses' => 'AdminController@statistics'
]);

Route::get('admin/print/{id}', [
   'as' => 'print',
   'uses' => 'BillController@print'
]);

Route::get('admin/processing/{id}', [
   'as' => 'processing',
    'uses' => 'AdminController@processing'
]);

Route::get('admin/shipping/{id}', [
   'as' => 'shipping',
   'uses' => 'AdminController@shipping'
]);

/*
 * USERCONTROLLER
 */
Route::get('/admin/show-users', [
   'as' => 'show-users',
   'uses' => 'UserController@show'
]);

Route::get('/admin/users/delete/{id}', [
   'as' => 'delete-users',
   'uses' => 'UserController@delete'
]);

/*
 * LOGIN ADMIN
 */

Route::get('/admin/login', [
   'as' => 'login',
   'uses' => 'AccountController@login_admin'
]);

Route::post('admin/login/process', [
    'as' => 'login-process',
    'uses' => 'AccountController@process_login_admin'
]);

Route::get('admin/logout', [
   'as' => 'logout_admin',
   'uses' => 'AccountController@logout_admin'
]);
