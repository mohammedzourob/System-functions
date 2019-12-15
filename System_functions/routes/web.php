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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/1', function () {
    return view('job.index1');
});

Auth::routes();

Route::get('/', 'HomeController@index');






Route::group(['middleware' => ['isUser']], function () {
    Route::get('new-Job/{id}','DemandController@createJob')->name('NewJob');
    Route::get('jobs', 'JobController@index')->name('jobs.index');
    Route::get('jobs{id}', 'JobController@show')->name('jobs.show');
    Route::post('demands', 'DemandController@store')->name('demands.store');



});

Route::group(['middleware' => ['isAdmin1']], function () {
    Route::resource('demand','DemandController');
    Route::get('demands', 'DemandController@index')->name('demands.index');

    Route::post('demand', 'DemandAdmin2Controller@store')->name('demandAdmins.store');
//    Route::get('demands','DemandController@index')->name('demands.index');
    Route::get('demands/{id}','DemandController@show')->name('demands.show');
});



Route::group(['middleware' => ['isAdmin2']], function () {
    Route::get('demandAdmins','DemandAdmin2Controller@index')->name('demandAdmins.index');
    Route::get('demandAdmins/{id}','DemandAdmin2Controller@show')->name('demandAdmins.show');
    Route::post('demandAdmin','DemandController@demandStoreAdmin2')->name('demandStoreAdmin2');
    Route::resource('demandAdmins','DemandAdmin2Controller');

});




