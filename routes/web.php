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

// Route::get('/Dashboard', 'HomeController@dummy');

Route::get('/Dashboard','catagorycontroller@show')->name('Dashboard');
Route::get('/showcementinfo','catagorycontroller@showcement');
//Add catagory
Route::get('/add_catagory','catagorycontroller@index');
Route::post('/add_catagory','catagorycontroller@store');
//Catagory End



//Model
//Model Add
Route::get('/add_model','modelController@index');
Route::post('/add_model','modelController@store');
//Model Add End
//Model Management
Route::get('/managemodel','modelController@ajaxPagination');
Route::get('model/edit/{id}','modelcontroller@edit');
Route::post('/updatemodel','modelcontroller@edit1');
Route::get('model/delete/{id}','modelcontroller@delete');


//Model Management End


//item add
Route::get('/addproduct','productController@index');
Route::post('/addproduct','productController@store');

Route::get('subcatagory/{id}','itemcontroller@getsub');

//item manage
Route::get('/managecement/{id}','itemcontroller@ajaxPagination')->name('ajax.pagination');
Route::get('item/edit/{id}','itemcontroller@edit');
Route::post('/updateitem','itemcontroller@edit1');
Route::get('item/delete/{id}','itemcontroller@delete');
Route::post('/searchcem','managecatagory@search');
//item End





Route::group(['middleware' => 'App\Http\Middleware\admin'],function(){
//User 
//User Add
Route::get('/adduser','userController@index');
Route::post('/adduser','userController@store');
Route::get('/manageuser','userController@ajaxPagination');
Route::get('user/edit/{id}','userController@edit');
Route::post('/updateuser','userController@edit1');
Route::get('user/delete/{id}','userController@delete');
});


//logout










