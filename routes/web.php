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

Route::get('/', function () {
    return view('frontend.pages.home.home');
});



Route::group(
       [
           'prefix'     =>'admin'
       ],
        function()
        {
            Route::get('home', function () {
                return view('backend.pages.dashboard.dashboard');
            });
//            Route::Resource('home','backend/AdminController');

        }
);

Route::group(
    [
        'prefix'        =>'frontend'
    ],
    function ()
    {
        Route::resource('home','frontend/HomeController');
        Route::resource('about' ,'frontend\SettingController');
        Route::resource('contact','frontend\ContactController');
    }

);

