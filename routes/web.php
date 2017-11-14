<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Admin\AdminController@redirect');


// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    

    Route::get('request','AdminController@show_requests');

    Route::get('owners','AdminController@show_owners');

    Route::get('providers','AdminController@show_providers');

    Route::get('car-types','AdminController@show_car_types');

    Route::get('maps','AdminController@show_map_view');

    Route::get('general-settings','AdminController@show_general_settings');

    

    
    
});

Route::get('/admin/payments', function () {
    return view('payments');
});

Route::get('/admin/promo-codes', function () {
    return view('promo');
});
     




