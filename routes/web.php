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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','SiteController@index');
Route::get('/services',"SiteController@services");
Route::get('/contact',"SiteController@contact");
Route::post('/contact',"SiteController@storeContact");
Route::get('/blog',"SiteController@blog");
Route::get('/blog/{slug}',"SiteController@show");
Route::get('/about',"SiteController@about");
Route::get('/services/{slug}',"SiteController@getPostsOfCategory");
//  Route::get('/service/{slug}',"SiteController@services");
Route::get('/service/travaux',"ServicesController@pageTravaux");
Route::get('/service/travaux/1',"ServicesController@pageTravaux1");
Route::get('/service/travaux/2',"ServicesController@pageTravaux2");
Route::get('/service/travaux/3',"ServicesController@pageTravaux3");

Route::get('/service/exportimport',"ServicesController@pageExport");
Route::get('/service/exportimport/1',"ServicesController@pageExport1");
Route::get('/service/exportimport/2',"ServicesController@pageExport2");
Route::get('/service/exportimport/3',"ServicesController@pageExport3");

Route::get('/service/it',"ServicesController@pageIt");
Route::get('/service/it/1',"ServicesController@pageIt1");
Route::get('/service/it/2',"ServicesController@pageIt2");
Route::get('/service/it/3',"ServicesController@pageIt3");



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
