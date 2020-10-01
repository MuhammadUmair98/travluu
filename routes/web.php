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

Route::post('/Documents_Saved','DocumentsController@store')->name('Documents_Saved')->middleware('verified');
Route::any('/register', function () {
    return view('layouts.app');
})->name('register')->middleware('verified');


Route::any('/logout','HomeController@getLogout')->name('myhome');
Route::get('/Vehicles/add/new/{post_id}','MyVehiclesController@showDriver')->name('save_vehicles_images')->middleware('verified');


Auth::routes(['verify' => true]);
Route::post('/Vehicles/add/new/{this_id}','MyVehiclesController@saveImages')->name('save_images')->middleware('verified');
Route::get('/form',function(){
    return view('layouts.forms');
})->name('form')->middleware('verified');
Route::get('/Vehicles','MyVehiclesController@show')->name('vehicles')->middleware('verified');
Route::get('/req_driver',function(){
return view('real_form.customer_info');
})->name('req_driver')->middleware('verified');
Route::get('/foo',function(){
    return view('layouts.forms_hour');
})->name('foo');
Route::get('/register_driver', 'HomeController@index')->name('home')->middleware('verified');
Route::post('/getinfo','DriverRegisterController@store')->name("store")->middleware('verified');

Route::get('/',function(){
    return view('layouts.main');
})->name('main_home');
Route::get('/Vehicles/new',function(){
    return view('driver_layouts.add_new_driver');
})->name('add_driver')->middleware('verified');
Route::get('/driver/profile','DriverRegisterController@show')->name('profile')->middleware('verified');
Route::post('/Vehicles','MyVehiclesController@store')->name('save_new_driver')->middleware('verified');
Route::post('/saved_changes','DriverRegisterController@update')->name('update')->middleware('verified');
Route::get('/submitDocument','DocumentsController@show')->name('docs')->middleware('verified');

Route::get('/Our_Fleet',function(){
return view('Layouts.Our_Fleet');
})->name("slider");

Route::any('/home',function(){
    return redirect()->route('main_home');
});
//////////////////////////////////////Admin Routes////////////////////////////////////////
Route::any('/admin','AdminController@getAdminData')->middleware('verify_admin')->name('Admin_Layout');
Route::get('/admin/user/{user_id}/{email_id}','AdminController@getUserData')->middleware('verify_admin')->name('specific_user');

Route::get('/vehicle/personal_info/{id}/{email}','AdminController@personalInfo')->middleware('verify_admin')->name('Pr_info');
Route::get('/vehicle/documents/{id}/{email}','AdminController@documentInfo')->middleware('verify_admin')->name('Pr_docs');
Route::get('/vehicle/pics/{id}/{email}','AdminController@PicsInfo')->middleware('verify_admin')->name('Pr_vehics');
Route::get('/vehicle/validate/{id}/{email}','AdminController@Validation')->middleware('verify_admin')->name('validation');
Route::post('/vehicle/validated','AdminController@datachanged')->middleware('verify_admin')->name('changeData');
Route::get('/vehicles/{id}/{email}','AdminController@getVehicles')->middleware('verify_admin')->name('getVehicles');
Route::get('/assign_referral/{email}','AdminController@getReferralCode')->name('referral');
Route::post('/referral_Saved/{email}','AdminController@saveReferral')->name('saveReferral');