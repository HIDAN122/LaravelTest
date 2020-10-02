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

Route::get('/','Account\AccountController@showAllAccounts')->name('accounts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//$groupData = [
//    'namespace' => 'Account',
//    'prefix' => 'bank'
//];
//Route::group($groupData, function () {
//    $methods = ['index', 'create', 'store', 'edit', 'update', 'destroy'];
//    Route::resource('accounts', 'AccountController')
//        ->only($methods)
//        ->names('bank.accounts');
//});

Route::get('/bank/accounts','Account\AccountController@index')->name('bank.accounts.index');

Route::get('/bank/accounts/create','Account\AccountController@create')->name('bank.accounts.create');

Route::post('/bank/accounts','Account\AccountController@store')->name('bank.accounts.store');

Route::get('/bank/accounts/{id}/edit','Account\AccountController@edit')->name('bank.accounts.edit');

Route::put('/bank/accounts/{id}','Account\AccountController@update')->name('bank.accounts.update');

Route::get('/bank/accounts/{id}','Account\AccountController@destroy')->name('bank.accounts.destroy');



Route::get('/bank/transactions','Transaction\TransactionController@index')->name('bank.transactions.index');

Route::get('/bank/transactions/create','Transaction\TransactionController@create')->name('bank.transactions.create');

Route::post('/bank/transactions','Transaction\TransactionController@store')->name('bank.transactions.store');
