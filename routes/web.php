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

Route::get('settings', function () {
    return view('settings');
});
Route::post('updatename','UserController@updateNameById');
Route::post('updateemail','UserController@updateEmailById');
Route::post('imageUpload','UserController@updateImgById');
Route::get('deleteImg','UserController@deleteImgById');
Route::get('deleteArt/{id}','ArtController@deleteArt');
Route::get('profile', 'ArtController@index');
Route::get('artist/{id}', 'ArtController@getArtist');
Route::get('imgdetail/{id}', 'ArtController@getImgById');
Route::get('category/{id}', 'ArtController@getArtById');
Route::post('sendmail', 'MailController@sendmail');
Route::post('upload', 'ArtController@imageupload');
Route::get('welcome', 'Auth\LoginController@welcome');
Route::get('login', 'Auth\LoginController@index');
Route::post('post-login', 'Auth\LoginController@postLogin');
Route::get('registration', 'Auth\LoginController@registration');
Route::post('post-registration', 'Auth\LoginController@postRegistration');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');