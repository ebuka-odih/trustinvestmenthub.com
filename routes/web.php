<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.index')->name('homepage');
Route::view('forex_trading', 'pages.forex_trading')->name('forex_trading');
Route::view('crypto', 'pages.crypto')->name('crypto');
Route::view('spreads', 'pages.spreads')->name('spreads');
Route::view('swap', 'pages.swap')->name('swap');
Route::view('account_type', 'pages.account_type')->name('account_type');
Route::view('meta4', 'pages.meta4')->name('meta4');
Route::view('meta5', 'pages.meta5')->name('meta5');
Route::view('capital', 'pages.capital')->name('capital');
Route::view('fxblue', 'pages.fxblue')->name('fxblue');

Route::view('about', 'pages.about')->name('about');
Route::view('plans', 'pages.plans')->name('plans');

Route::get('contact','ContactFormController@create')->name('contact.create');
Route::post('contact-us/store','ContactFormController@store')->name('contact.store');


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
