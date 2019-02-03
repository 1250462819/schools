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
    return view('Home.index');
});
Route::get('/home/{name}','Home\PostController@index');
Route::get('/home/{name}/about','Home\PostController@about');
Route::get('/home/{name}/contact','Home\PostController@about');
Route::get('/home/{name}/gallery','Home\PostController@gallery');
Route::get('/home/{name}/classroom','Home\HomeController@classroom');
Route::get('/home/{name}/student','Home\HomeController@student');
Route::get('/home/{name}/teacher','Home\HomeController@teacher');




Route::get('/search','HomeController@search');


Route::prefix('admin')->namespace('Admin')->middleware(['auth:web','checkAdmin'])->group(function (){
    $this->get('/panel','PanelController@index');
    $this->resource('schools','SchoolController');
    $this->resource('users','UserController');
    $this->resource('address','AddressController');
    $this->resource('{name}/classroom_teacher','classroom_teacherController');
    $this->resource('{name}/lesson_teacher','lesson_teacherController');
    $this->get('school/{name}','PageController@index');
   $this->resource('{name}/classroom','ClassroomController');
   $this->resource('{name}/students','StudentsController');
   $this->resource('{name}/teachers','TeachersController');
   $this->resource('{class}/{name}/lesson','LessonController');
   $this->resource('{class}/{name}/student','StudentController');
   $this->resource('{class}/{name}/teacher','TeacherController');
});
//Route::get('/admin/panel', 'Admin\PanelController@index');

Route::group(['namespace'=>'Auth'],function(){
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', '\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', '\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', '\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', '\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', '\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', '\ResetPasswordController@reset');
});
