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

Route::view('/', 'pages.index')->name('index');
Route::view('/terms-of-service', 'pages.terms')->name('terms');
Route::view('/privacy-and-policies', 'pages.privacy')->name('privacy');
Route::view('admin/login', 'auth.admin');

Auth::routes(['verify'=> true]);
//include 'admin.php';
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'],
    function(){

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::get('edit/profile/{id}', 'UserController@editProfile')->name('editProfile');
    Route::patch('update/profile/{id}', 'UserController@updateProfile')->name('updateProfile');
    Route::get('/fund-account', "UserController@fundAcct")->name('fundAcct');

    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('store/withdraw', "WithdrawController@storeWithdraw")->name('storeWithdraw');

    Route::get('upload/document', "DocumentController@document")->name('document');
    Route::post('upload/document', "DocumentController@storeDocument")->name('storeDocument');
});
