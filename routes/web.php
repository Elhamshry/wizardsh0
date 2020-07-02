<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
Route::get('/' , function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses','CoursesController@index');

Route::get('/courses','CoursesController@create');

Route::post('/courses','CoursesController@storeCourse');


|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/centers', function () {
    return view('centers');
});
Route::get('/educational_org', function () {
    return view('educational_org');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/web_development', function () {
    return view('web_development');
});
Route::get('/cyber_security', function () {
    return view('cyber_security');
});
Route::get('/data_base', function () {
    return view('data_base');
});
Route::get('/mobile_app', function () {
    return view('mobile_app');
});

Route::resource('addcmaterial','AddCmaterialController');
