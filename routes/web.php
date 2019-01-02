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
Route::get('/object_spec/{category}', 'HomepageController@ObjectSpec')->name('object_spec');
Route::get('/object_detail/{id}', 'HomepageController@ObjectDetail')->name('object_detail');



/*gallery*/
Route::get('/gallery_list', 'GalleryController@GalleryList')->name('gallery_list');



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
Route::get('/hotel_detail/{id}', 'HotelController@HotelDetail')->name('hotel_detail');
Route::get('/hotel_list', 'HotelController@HotelListWeb')->name('hotel_list');



/*List Booking*/

Route::get('/testing_email',function (){
    return view('admin.email_templat');
});

Route::get('/list_booking/{status}','BookingController@listBooking')->name('list_booking');

Route::post('/post_booking', 'BookingController@postBooking')->name('post_booking');
Route::get('/view_detail_booking/{id}', 'BookingController@viewDetailBooking')->name('view_detail_booking');
Route::get('/process_booking/{id}', 'BookingController@processBooking')->name('process_booking');
Route::get('/reject_booking/{id}', 'BookingController@rejectBooking')->name('reject_booking');


Auth::routes();

