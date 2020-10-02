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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['namespace'=>'Account','prefix'=>'bank'],function (){
//    Route::resource('accounts','AccountController')->names('bank.accounts');
//});

$groupData = [
    'namespace' => 'Account',
    'prefix' => 'bank'
];
Route::group($groupData, function () {
    $methods = ['index', 'create', 'store', 'edit', 'update', 'destroy'];
    Route::resource('accounts', 'AccountController')
        ->only($methods)
        ->names('bank.accounts');
});
//Route::get('/bank/accounts/create','Account\AccountController@create')->name('bank.accounts.create');\


$transactionData = [
    'namespace' => 'Account',
    'prefix' => 'bank/accounts'
];
Route::group($transactionData, function () {
    $methods = ['index','create','store'];
    Route::resource('transactions', 'TransactionController')
        ->only($methods)
        ->names('bank.transactions');
});


