<?php

use Illuminate\Support\Facades\Route;



Route::prefix('/employee')->namespace('App\Http\Controllers\Auth\Employee')->name('employee.')->group(function(){
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::post('/logout/employee', 'LoginController@logoutemployee')->name('employee.logout');
    Route::post('/logout', 'LoginController@showLoginForm')->name('logout');


});

Route::prefix('/employee')->middleware('employee')->namespace('App\Http\Controllers\Employee')->name('employee.')->group(function(){
    Route::get('/', 'DashboardController@home')->name('home');
    Route::get('/profile', 'DashboardController@profile')->name('profile');


    Route::put('employee/profile/{id}','EmployeeController@profile')->name('employee.profile');







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




    Route::resource('/order', 'OrderController');
    Route::get('visitors', 'VisitorsController@index')->name('visitors');
    Route::get('visitors/date/visitors', 'VisitorsController@date_visitors')->name('visitors.date');

    Route::get('/check/table', 'VisitorsController@get_table')->name('table.check');
    Route::get('/check', 'VisitorsController@table_check')->name('table.post.check');

/*
    Route::resource('/order', 'OrderController');
    Route::get('order/edit/order', 'OrderController@editorder')->name('order.edit');
    Route::get('order/Show/{order}/edit/order', 'OrderController@showedit')->name('order.show.edit');
    Route::get('order/get/order', 'OrderController@getorder')->name('order.get');
    Route::get('order/delete/order', 'OrderController@deleteorder')->name('order.delete');
    Route::delete('order/destroy/order', 'OrderController@destroyorder')->name('order.remove');
    Route::delete('order/order/destroy_all','OrderController@destroy_all')->name('order.destroy_all');
    Route::post('update/order/{order}/status', 'OrderController@updateOrderState')->name('order.updateState');
    Route::get('index/order/index', 'OrderController@getorders')->name('getOrders');
    Route::get('user/order/index', 'OrderController@getOrderUser')->name('getOrderUser');



    Route::resource('/session', 'SessionsController');
    Route::get('session/edit/session', 'SessionsController@editsession')->name('session.edit');
    Route::get('session/Show/{session}/edit/session', 'SessionsController@showedit')->name('session.show.edit');
    Route::get('session/{order}/create/session', 'SessionsController@createSession')->name('session.show.create');
    Route::get('session/{order}/index/session', 'SessionsController@index')->name('session.show.index');
    Route::get('session/get/session', 'SessionsController@getsession')->name('session.get');
    Route::get('session/delete/session', 'SessionsController@deletesession')->name('session.delete');
    Route::delete('session/destroy/session', 'SessionsController@destroysession')->name('session.remove');
    Route::delete('session/session/destroy_all','SessionsController@destroy_all')->name('session.destroy_all');

    Route::get('index/table/index', 'SessionsController@getmemberships')->name('getsessions');
    Route::post('session/date/session', 'SessionsController@date_sessions')->name('session.date');


*/




}


);


