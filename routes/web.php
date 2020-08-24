<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','Front\HomePageController@index')->name('logout');
Route::resource('editor','CkeditorController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
Route::get('/me','MyController@index');
Route::get('/homepage','Front\HomePageController@index')->name('homepage');
Route::get('/about','Front\AboutPageController@index')->name('about');
Route::get('/doctor','Front\DoctorPageController@index')->name('doctor');
Route::get('/department','Front\DepartmentPageController@index')->name('department');
Route::get('/pricing','Front\PricingPageController@index')->name('pricing');
Route::get('/blog','Front\BlogPageController@index')->name('blog');
Route::get('/contact','Front\ContactPageController@index')->name('contact');
Route::get('/singleblog','Front\SingleBlogPageController@index')->name('singleblog');


Route::group(['prefix'=>'back'],function()
{

Route::get('/','Admin\DashboardController@index');
Route::get('/catagory','Admin\CatagoryController@index');
Route::get('/catagory/create','Admin\CatagoryController@create');
Route::get('/catagory/edit','Admin\CatagoryController@edit');
Route::get('/permission/create','Admin\PermissionController@create');
Route::get('/permission','Admin\PermissionController@index');
Route::post('/permission/store','Admin\PermissionController@store');
Route::get('/permission/edit/{id}',['uses' => 'Admin\PermissionController@edit','as' => 'permission-edit']);
Route::put('/permission/update/{id}',['uses' => 'Admin\PermissionController@update','as' => 'permission-update']);
Route::delete('/permission/delete/{id}',['uses' => 'Admin\PermissionController@destroy','as' => 'permission-delete']);

Route::get('/roles','Admin\RoleController@show');
Route::get('/roles/create','Admin\RoleController@create');
Route::post('/roles/store','Admin\RoleController@store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
