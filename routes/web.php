<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(["as"=>'manager.', "prefix"=>'manager', "namespace"=>'manager', "middleware"=>['auth','manager']],function(){
  Route::get('dashbord','managerController@index')->name('manager.dashbord');

  Route::group(["as"=>'profile.',"prefix"=>'profile'],function(){
    Route::get('view','profileController@view')->name('view');
    Route::post('change/password','profileController@change_password')->name('change_password');
    Route::post('update/{id}','profileController@update');
    Route::get('delete/{id}','supplierController@delete');
  });



  Route::group(["as"=>'supplier.',"prefix"=>'supplier'],function(){
    Route::get('view','supplierController@view')->name('view');
    Route::get('add','supplierController@add')->name('add');
    Route::post('store','supplierController@store')->name('store');
    Route::get('unactive/{id}','supplierController@unactive');
    Route::get('active/{id}','supplierController@active');
    Route::get('edite/{id}','supplierController@edite');
    Route::post('update/{id}','supplierController@update');
    Route::get('delete/{id}','supplierController@delete');
  });




  Route::group(["as"=>'customer.',"prefix"=>'customer'],function(){
    Route::get('view','customerController@view')->name('view');
    Route::get('add','customerController@add')->name('add');
    Route::post('store','customerController@store')->name('store');
    Route::get('unactive/{id}','customerController@unactive');
    Route::get('active/{id}','customerController@active');
    Route::get('edite/{id}','customerController@edite');
    Route::post('update/{id}','customerController@update');
    Route::get('delete/{id}','customerController@delete');
  });



  Route::group(["as"=>'unite.',"prefix"=>'unite'],function(){
    Route::get('view','uniteController@view')->name('view');
    Route::get('add','uniteController@add')->name('add');
    Route::post('store','uniteController@store')->name('store');
    Route::get('unactive/{id}','uniteController@unactive');
    Route::get('active/{id}','uniteController@active');
    Route::get('edite/{id}','uniteController@edite');
    Route::post('update/{id}','uniteController@update');
    Route::get('delete/{id}','uniteController@delete');
  });



  Route::group(["as"=>'category.',"prefix"=>'category'],function(){
    Route::get('view','categoryController@view')->name('view');
    Route::get('add','categoryController@add')->name('add');
    Route::post('store','categoryController@store')->name('store');
    Route::get('unactive/{id}','categoryController@unactive');
    Route::get('active/{id}','categoryController@active');
    Route::get('edite/{id}','categoryController@edite');
    Route::post('update/{id}','categoryController@update');
    Route::get('delete/{id}','categoryController@delete');
  });


  Route::group(["as"=>'product.',"prefix"=>'product'],function(){
    Route::get('view','productController@view')->name('view');
    Route::get('add','productController@add')->name('add');
    Route::post('store','productController@store')->name('store');
    Route::get('unactive/{id}','productController@unactive');
    Route::get('active/{id}','productController@active');
    Route::get('edite/{id}','productController@edite');
    Route::post('update/{id}','productController@update');/*
    Route::get('delete/{id}','productController@delete');*/
  });


  Route::group(["as"=>'employee.',"prefix"=>'employee'],function(){
    Route::get('view','employeeController@view')->name('view');
    Route::get('add','employeeController@add')->name('add');
    Route::post('store','employeeController@store')->name('store');
    Route::get('unactive/{id}','employeeController@unactive');
    Route::get('active/{id}','employeeController@active');
    Route::get('edite/{id}','employeeController@edite');
    Route::post('update/{id}','employeeController@update');
    Route::get('delete/{id}','employeeController@delete');
  });


  Route::group(["as"=>'report.',"prefix"=>'report'],function(){
    Route::get('view/today','reportController@today')->name('today');
    Route::get('view/yesterday','reportController@yesterday')->name('yesterday');
    Route::get('week','reportController@week')->name('week');
    Route::get('month','reportController@month')->name('month');

  });



  Route::group(["as"=>'order.',"prefix"=>'order'],function(){
    Route::get('report/order/{id}','orderController@show');


  });



  Route::group(["as"=>'pdf.',"prefix"=>'pdf'],function(){
    Route::get('today/report','pdfController@today_report')->name('today_report');
    Route::get('month/report','pdfController@month_report')->name('month_report');
    Route::get('week/report','pdfController@week_report')->name('week_report');
    Route::get('yesterday/report','pdfController@yesterday_report')->name('yesterday_report');

  });







});















Route::group(["as"=>'employee.', "prefix"=>'employee', "namespace"=>'employee', "middleware"=>['auth','employee']],function(){
  Route::get('dashbord','employeeController@index')->name('employee.dashbord');



  Route::group(["as"=>'pos.',"prefix"=>'pos'],function(){
    Route::get('view','posController@view')->name('view');
    Route::post('customer/store','cartController@customer_store')->name('cart-customer-id.add');
    Route::post('cart-store/{id}','cartController@store');
    Route::post('cart-update/{id}','cartController@cart_update');
    Route::get('card-delete/{id}','cartController@cart_delete');/*
    Route::get('edite/{id}','cartController@edite');
    Route::post('update/{id}','cartController@update');
    Route::get('delete/{id}','cartController@delete');*/
  });



  Route::group(["as"=>'customer.',"prefix"=>'customer'],function(){
    Route::get('view','customerController@view')->name('view');
    Route::get('add','customerController@add')->name('add');
    Route::post('store','customerController@store')->name('store');
    Route::get('unactive/{id}','customerController@unactive');
    Route::get('active/{id}','customerController@active');
    Route::get('edite/{id}','customerController@edite');
    Route::post('update/{id}','customerController@update');
    Route::get('delete/{id}','customerController@delete');
  });


  Route::group(["as"=>'order.',"prefix"=>'order'],function(){
    Route::get('view','orderController@view')->name('view');
    //Route::get('add','orderController@add')->name('add');
    Route::post('store','orderController@store')->name('store');
    Route::get('single_view/{id}','orderController@single_view');
      //Route::get('edite/{id}','orderController@edite');
    //Route::post('update/{id}','orderController@update');
    //Route::get('delete/{id}','orderController@delete');
  });

  Route::group(["as"=>'category.',"prefix"=>'category'],function(){
    Route::get('view','categoryController@view')->name('view');
    Route::get('add','categoryController@add')->name('add');
    Route::post('store','categoryController@store')->name('store');
    Route::get('unactive/{id}','categoryController@unactive');
    Route::get('active/{id}','categoryController@active');
    Route::get('edite/{id}','categoryController@edite');
    Route::post('update/{id}','categoryController@update');
    Route::get('delete/{id}','categoryController@delete');
  });


  Route::group(["as"=>'unite.',"prefix"=>'unite'],function(){
    Route::get('view','uniteController@view')->name('view');
    Route::get('add','uniteController@add')->name('add');
    Route::post('store','uniteController@store')->name('store');
    Route::get('unactive/{id}','uniteController@unactive');
    Route::get('active/{id}','uniteController@active');
    Route::get('edite/{id}','uniteController@edite');
    Route::post('update/{id}','uniteController@update');
    Route::get('delete/{id}','uniteController@delete');
  });


  Route::group(["as"=>'supplier.',"prefix"=>'supplier'],function(){
    Route::get('view','supplierController@view')->name('view');
    Route::get('add','supplierController@add')->name('add');
    Route::post('store','supplierController@store')->name('store');
    Route::get('unactive/{id}','supplierController@unactive');
    Route::get('active/{id}','supplierController@active');
    Route::get('edite/{id}','supplierController@edite');
    Route::post('update/{id}','supplierController@update');
    Route::get('delete/{id}','supplierController@delete');
  });

  Route::group(["as"=>'product.',"prefix"=>'product'],function(){
    Route::get('view','productController@view')->name('view');
    Route::get('add','productController@add')->name('add');
    Route::post('store','productController@store')->name('store');
    Route::get('unactive/{id}','productController@unactive');
    Route::get('active/{id}','productController@active');
    Route::get('edite/{id}','productController@edite');
    Route::post('update/{id}','productController@update');
    Route::get('delete/{id}','productController@delete');
  });



Route::get('pdf/{id}','pdfController@index');



});
