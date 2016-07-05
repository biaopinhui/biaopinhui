<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'isAdmin']], function () {
    Route::get('admin', 'AdminController@index');

    Route::get('/admin/categories/{id}', 'AdminController@categories');
    Route::get('/admin/products/{id}', 'AdminController@products');
    Route::get('/admin/product/create/{id}', 'ProductController@create');
    Route::post('/admin/product/store/{id}', 'ProductController@store');
    Route::get('/admin/product/edit/{id}', 'ProductController@edit');
    Route::post('/admin/product/update/{id}', 'ProductController@update');
    Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');

    Route::post('/admin/image/upload/{id}', 'ImageController@upload');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('pages.home');
    });

    Route::get('/about', function () {
        return view('pages.about');
    });

    Route::get('/contact', function () {
        return view('pages.contact');
    });

    Route::get('/faq', function () {
        return view('pages.faq');
    });

    Route::get('/{category_name?}/{sub_category_name?}', [
        'uses' => 'ProductController@index'
    ])->where([
        'category_name' => '(biaopai|huizhang|diaopai|baozhuang|yinshua)',
        'sub_category_name' => '[a-z]+'
    ]);

    Route::get('/{product_id}', [
        'uses' => 'ProductController@show'
    ])->where([
        'product_id' => '[\d]+'
    ]);

    Route::get('/admin/login', 'AdminController@getLogin');

    Route::post('/admin/login', 'AdminController@postLogin');
        
    Route::get('/admin/logout', 'AdminController@logout');

    // Route::auth();
    // Route::get('/home', 'HomeController@index');
});
