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


use App\Mail\Abmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/single-package', function () {
    return view('single-package');
})->name('single-package');




Route::get('/packages/{packageName}', 'PackageController@singlePackage')->name('package-by-name');



//Route::get('/packages/{packageName}', function ($packageName,$id) {
//
//    dd($packageName);
//
//    return view('single-package')->with('packageName',$packageName);
//})->name('package-by-name');
//



//culture-and-heritage
//beaches
//nature-and-wild-life
//tea-trails-and-scenic-beauty
//ayurvedha-and-reflexology
//adventure-and-sports












Route::get('/contact', function () {
    return view('contact');
});



Route::get('/', function(){

    //Mail::to('susanthawarnapura@gmail.com')->send(new Abmail());
    return view('index');
})->name('home');





Route::get('/packages', function () {
    return view('packages');
})->name('packages');


Route::post('/package/resgister', 'PackageController@packageRegister')->name('package_reg');





Route::get('/default-page', function () {
    return view('default-page');
})->name('default-page');

Route::get('/register-foreign', function () {
    return view('register-foreign')
        ->with('title', 'Registration Form - Foreign')
        ->with('form_action_route', 'register-foreign-submit')
        ->with('package_id', null);

})->name('register-foreign');


Route::post('/taylor-made-form', 'PackageController@loadTayorMadeForm')->name('taylor-made-form');
Route::get('/taylor-made-form', 'PackageController@redirectTayorMadeForm')->name('taylor-made-form');


Route::post('/taylormade-form-submit', 'PackageController@taylorMadeFormSubmit')->name('taylormade-form-submit');




Route::get('/register-local', function () {
    return view('register-local');
})->name('register-local');





/* tourist reg */





Route::get('/tourist_register_form', function () {
    return view('register-foreign')
        ->with('package_id', 'null')
        ->with('form_action_route', 'register-tourist-submit')
        ->with('title', 'Registration Form - for package');


})->name('load_tourist_register_form_get');

Route::post('/tourist_register_form', 'TouristController@loadTouristRegisterForm')->name('load_tourist_register_form_post');

Route::post('/register-tourist', 'TouristController@regForPackage')->name('register-tourist-submit');

/* end tourist reg */












Route::post('/register-local', 'BikerRegistrationController@localFormSubmit')->name('register-local-submit');
Route::get('/register-local/rand', 'BikerRegistrationController@generateUniqueRegCode')->name('register-local-rand');








Route::get('/register-local/submit', function () {
    return view('form-submit-page');
})->name('register-submit');


Route::post('/home/get-time', 'HomePageController@getTime')->name('get-counter-time');



Route::post('/register-foreign', 'BikerRegistrationController@foreignFormSubmit')->name('register-foreign-submit');





/*-- admin routes --*/


Route::get('/admin', 'AdminController@index')->name('admin_index');





Route::get('admin/dashboard','AdminController@loadDashboard')->middleware('adminPanel')->name('admin_dashboard');







//
Route::get('admin/local-registrations', 'AdminController@getLocalBikers')->middleware('adminPanel')->name('admin_local-reg');

Route::get('admin/foreign-registrations','AdminController@getForeignBikers')->middleware('adminPanel')->name('admin_foreign-reg');


Route::get('admin/tourist-registrations','AdminController@getTouristRegistrations')->middleware('adminPanel')->name('admin_tourist-reg');

Route::get('admin/package-registration-list','AdminController@getPackageRegistrations')->middleware('adminPanel')->name('admin_package-reg-list');


Route::post('/admin/login', 'AdminController@login')->name('admin_login');
Route::get('/admin/logout', 'AdminController@logout')->name('admin_logout');




Route::get('/aaa', 'AdminController@aaa')->name('aaa');



//get data txt
Route::post('/admin/data', 'AdminController@getData')->name('get-admin-data');

// Route::get('{foo}', array(	'name' => 'foo.home', 
// 							'uses' => function(){

// 							}

// ));

// Route::get('{foo}', array('name' => 'foo.home', function(){
//     $fooController = $app->make('FooController');
//     return $fooController->callAction('home', $parameters = array());
// }));
