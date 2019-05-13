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




Route::get('/cart', function () {
    return view('cart');
});


Route::get('/single-package', function () {
    return view('single-package');
})->name('single-package');



Route::get('/packages/{packageName}', function ($packageName) {

    //dd($packageName);

    return view('single-package')->with('packageName',$packageName);
})->name('package-by-name');






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
    return view('index');										}

)->name('home');





Route::get('/packages', function () {
    return view('packages');
})->name('packages');


Route::get('/default-page', function () {
    return view('default-page');
})->name('default-page');

Route::get('/register-foreign', function () {
    return view('register-foreign');
})->name('register-foreign');

Route::get('/register-local', function () {
    return view('register-local');
})->name('register-local');




Route::post('/register-local', 'BikerRegistrationController@localFormSubmit')->name('register-local-submit');
Route::get('/register-local/rand', 'BikerRegistrationController@generateUniqueRegCode')->name('register-local-rand');

Route::get('/register-local/submit', function () {
    return view('form-submit-page');
})->name('register-submit');


Route::post('/home/get-time', 'HomePageController@getTime')->name('get-counter-time');



Route::post('/register-foreign', 'BikerRegistrationController@foreignFormSubmit')->name('register-foreign-submit');









// Route::get('{foo}', array(	'name' => 'foo.home', 
// 							'uses' => function(){

// 							}

// ));

// Route::get('{foo}', array('name' => 'foo.home', function(){
//     $fooController = $app->make('FooController');
//     return $fooController->callAction('home', $parameters = array());
// }));
