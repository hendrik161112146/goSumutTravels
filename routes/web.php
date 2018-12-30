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
Route::get('/object_tourist_list', 'ObjectTouristController@index')->name('object_tourist_list');
Route::get('/add_object_tourist', 'ObjectTouristController@addTouristObject')->name('add_object_tourist');
Route::post('/add_object_tourist', 'ObjectTouristController@addTouristObject')->name('add_object_tourist');
Route::get('/edit_object_tourist/{id}', 'ObjectTouristController@editTouristObject')->name('edit_object_tourist');
Route::post('/edit_object_tourist/{id}', 'ObjectTouristController@editTouristObject')->name('edit_object_tourist');
Route::get('/delete_object_tourist/{id}', 'ObjectTouristController@deleteTouristObject')->name('delete_object_tourist');


/*upload image*/
Route::get('/add_upload_image_tourist/{id}', 'UploadImageController@addUploadImageObject')->name('add_upload_image_tourist');
Route::post('/add_upload_image_tourist/{id}', 'UploadImageController@addUploadImageObject')->name('add_upload_image_tourist');
Route::post('/delete_upload_image_tourist/{id?}', 'UploadImageController@deleteUploadImageObject')->name('delete_upload_image_tourist');
/*Package tourist*/

Route::get('/add_package', function (){
    dd('add_package');
})->name('add_package');

/*hotels*/
Route::get('/hotels_list', 'HotelController@hotelList')->name('hotels_list');

Route::get('/addhotel', 'HotelController@AddHotels')->name('addhotels');
Route::post('/addhotel', 'HotelController@AddHotels')->name('addhotels');
Route::get('/edithotel/{id}', 'HotelController@Edithotel')->name('edithotels');
Route::post('/edithotel/{id}', 'HotelController@Edithotel')->name('edithotels');
Route::get('/deletehotel/{id}', 'HotelController@Deletehotel')->name('deletehotels');





/*List Booking*/

Route::get('/list_booking', function (){
    dd('list_booking');
})->name('list_booking');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');

});

