<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

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

Route::group(['middleware' => ['web']], function () {
    //
});
