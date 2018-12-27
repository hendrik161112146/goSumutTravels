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

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/homelist', 'HomepageController@HomeList')->name('homelist');


/*dashboard Admin*/

Route::get('/admin_dashboard', function (){
        return redirect('home');
    })->name('admin_dashboard');

/* Object Tourist*/

Route::get('/add_object_tourist', 'ObjectTouristController@index')->name('add_object_tourist');
Route::post('/add_object_tourist', 'ObjectTouristController@addTouristObject')->name('add_object_tourist');
Route::get('/edit_object_tourist/{id}', 'ObjectTouristController@editTouristObject')->name('edit_object_tourist');
Route::post('/edit_object_tourist/{id}', 'ObjectTouristController@editTouristObject')->name('edit_object_tourist');
Route::get('/delete_object_tourist/{id}', 'ObjectTouristController@deleteTouristObject')->name('delete_object_tourist');
/*Package tourist*/

Route::get('/add_package', function (){
    dd('add_package');
})->name('add_package');

/*List Booking*/

Route::get('/list_booking', function (){
    dd('list_booking');
})->name('list_booking');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');

});

