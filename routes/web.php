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
$destination=\App\destination::all();
Route::get('/','frontend\HomeController@index');



Route::group(
       [
           'middleware'  =>'auth',
           'prefix'     =>'admin'
       ],
        function()
        {
            Route::get('home', function () {
                return view('backend.pages.dashboard.dashboard');
            });
            Route::resource('destination','backend\DestinationController');

//            Route::Resource('home','backend/AdminController');

        }
);





Route::group(
    [
        'prefix'        =>'frontend'
    ],
    function ()
    {
        Route::resource('home','frontend\HomeController');
        Route::resource('about' ,'frontend\SettingController');
        Route::resource('contact','frontend\ContactController');
        Route::resource('information','frontend\InformationController');
        Route::resource('services','frontend\ServicesController');

//        Route::get('information','frontend\InformationController@index');





    }

);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
