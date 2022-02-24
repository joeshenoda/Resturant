<?php

use Illuminate\Support\Facades\Route;



Route::prefix('/admin')->namespace('App\Http\Controllers\Auth\Admin')->name('admin.')->group(function(){
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout/admin', 'LoginController@logoutadmin')->name('admin.logout');
    Route::post('/logout', 'LoginController@showLoginForm')->name('logout');


});

Route::prefix('/admin')->middleware('admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(function(){
    Route::get('/', 'DashboardController@home')->name('home');
    Route::get('/profile', 'DashboardController@profile')->name('profile');


    Route::resource('/admin', 'AdminController');
    Route::put('admin/profile/{id}','AdminController@profile')->name('admin.profile');
    Route::delete('admin/admin/destroy_all','AdminController@destroy_all')->name('admin.destroy_all');





    Route::resource('/employee', 'EmployeeController');
    Route::get('employee/edit/employee', 'EmployeeController@editemployee')->name('employee.edit');
    Route::get('employee/Show/{employee}/edit/employee', 'EmployeeController@showedit')->name('employee.show.edit');
    Route::get('employee/get/employee', 'EmployeeController@getemployee')->name('employee.get');
    Route::get('employee/delete/employee', 'EmployeeController@deleteemployee')->name('employee.delete');
    Route::delete('employee/destroy/employee', 'EmployeeController@destroyemployee')->name('employee.remove');
    Route::delete('employee/employee/destroy_all','EmployeeController@destroy_all')->name('employee.destroy_all');

    Route::get('index/employee/index', 'EmployeeController@getemployees')->name('getemployees');





    Route::resource('/user', 'UserController');
    Route::get('user/edit/user', 'UserController@edituser')->name('user.edit');
    Route::get('user/Show/{user}/edit/user', 'UserController@showedit')->name('user.show.edit');
    Route::get('user/get/user', 'UserController@getuser')->name('user.get');
    Route::get('user/delete/user', 'UserController@deleteuser')->name('user.delete');
    Route::delete('user/destroy/user', 'UserController@destroyuser')->name('user.remove');
    Route::delete('user/user/destroy_all','UserController@destroy_all')->name('user.destroy_all');
    Route::get('index/user/index', 'UserController@getemployees')->name('getusers');

    Route::get('orders/user/{user}/orders/index', 'UserController@orders')->name('user.orders');
    Route::get('orders/filter/user/{user}/order/index', 'UserController@getuserorders')->name('user.getOrders');


    Route::resource('/table', 'TableController');
    Route::get('table/edit/table', 'TableController@editmembership')->name('table.edit');
    Route::get('table/Show/{table}/edit/table', 'TableController@showedit')->name('table.show.edit');
    Route::get('table/get/table', 'TableController@gettable')->name('table.get');
    Route::get('table/delete/table', 'TableController@deletetable')->name('table.delete');
    Route::delete('table/destroy/table', 'TableController@destroytable')->name('table.remove');
    Route::delete('table/table/destroy_all','TableController@destroy_all')->name('table.destroy_all');

      Route::get('index/table/index', 'TableController@gettables')->name('gettable');

          Route::resource('/order', 'OrderController');






    Route::get('visitors', 'VisitorsController@index')->name('visitors');
    Route::get('visitors/date/visitors', 'VisitorsController@date_visitors')->name('visitors.date');

    Route::get('/check/table', 'VisitorsController@get_table')->name('table.check');
    Route::get('/check', 'VisitorsController@table_check')->name('table.post.check');



}


);

