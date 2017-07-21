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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index');

Route::get('create', 'IndexController@create')->name('companyCreate');
Route::post('create', 'IndexController@store')->name('companyStore');
Route::get('edit/{company}', 'IndexController@edit')->name('companyEdit');
Route::post('edit', 'IndexController@update')->name('companyUpdate');
Route::delete('delete/{company}', function(\App\Company $company) {
	// $company_tmp = \App\Company::where('id', $company)->first();
	// dd($company);
	$company->delete();
	return redirect('/');
})->name('companyDelete');

