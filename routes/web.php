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

Route::get('/', 'PublicController@index')->name('index');
Route::get('/about', 'PublicController@about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');
Route::get('/executive', 'PublicController@executive')->name('executive');
Route::get('/management', 'PublicController@management')->name('management');
Route::get('/anthem', 'PublicController@anthem')->name('anthem');
Route::get('/alumni', 'PublicController@alumni')->name('alumni');
Route::get('/gallery', 'PublicController@gallery')->name('gallery');
Route::get('/why-choose-rfcs', 'PublicController@whychooserfcs')->name('whychoose');
Route::get('/admission-process', 'PublicController@admission')->name('admission');
Route::get('/tuition-payment', 'PublicController@tuition')->name('tution');
Route::get('/prospectus', 'PublicController@prospectus')->name('prospectus');
Route::get('/vle', 'PublicController@vle')->name('vle');
Route::get('/daycare', 'PublicController@daycare')->name('daycare');
Route::get('/nursery', 'PublicController@nursery')->name('nursery');
Route::get('/primary', 'PublicController@primary')->name('primary');
Route::get('/secondary', 'PublicController@secondary')->name('secondary');
Route::get('/learning-support', 'PublicController@learningsupport')->name('learningsupport');
Route::get('/curriculum', 'PublicController@curriculum')->name('curriculum');
Route::get('/news-events', 'PublicController@newsevents')->name('news');
Route::get('/faqs', 'PublicController@faqs')->name('faqs');
//Route::get('/faqs', 'PublicController@')->name('faqs');

/*---- ROUTES FOR VLE ------*/
Route::get('/vle-login', 'VLEController@login')->name('login');
Route::get('/home', 'VLEController@home')->name('home');
Route::get('/subject', 'VLEController@subject')->name('vle.subject');
Route::get('/lesson', 'VLEController@lesson')->name('vle.lesson');
Route::get('/profile', 'VLEController@profile')->name('vle.profile');
Route::get('/user_guide', 'VLEController@user_guide')->name('vle.user_guide');
Route::get('/feedback', 'VLEController@feedback')->name('vle.feedback');
Route::get('/get_all_subjects', 'VLEController@get_all_subjects')->name('get.subjects');
Route::post('/authenticate', 'VLEController@authenticate')->name('login.process');


/*----- ROUTES FOR ADMIN ------*/
Route::get('/admin-login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('/admin/home', 'AdminController@home')->name('admin.home');
Route::get('/admin/list-students', 'AdminController@list_students')->name('admin.list.students');
Route::get('/admin/list-teachers', 'AdminController@list_teachers')->name('admin.list.teachers');
Route::get('/admin/create-students', 'AdminController@create_student')->name('admin.create.students');
Route::get('/admin/create-teachers', 'AdminController@create_teacher')->name('admin.create.teachers');
Route::get('/admin/add-lesson', 'AdminController@add_lesson')->name('admin.add.lesson');
Route::get('/admin/add-subject', 'AdminController@add_subject')->name('admin.add.subject');
Route::post('/login_admin', 'AdminController@authenticate')->name('login_admin');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/vle-login', 'VLEController@home');
// Route::get('/vle-login', 'VLEController@login');
// Route::get('/vle-login', 'VLEController@home');
// Route::get('/vle-login', 'VLEController@login');
// Route::get('/vle-login', 'VLEController@home');
