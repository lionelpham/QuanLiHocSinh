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

//Auth
Route::post('/user-register', 'UserController@register');
Route::post('/user-login', 'UserController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'UserController@login');

//Homepage
Route::get('/homepage', 'HomepageController@index');

//Update profile, account
Route::get('/update-profile', 'HomepageController@profile');
Route::get('/update-account', 'HomepageController@account');

// role
// Route::get('/set-role', 'RolesController@setRole');
Route::get('/create-role', 'RolesController@createRole');
Route::get('/list-role', 'RolesController@listRole');

// account
Route::get('/add-account', 'AccountController@addAccount');
Route::get('/list-account', 'AccountController@listAccount');
Route::get('/edit-account/IDACCOUNT', 'AccountController@editAccount');

// semester
Route::get('/add-semester', 'SemesterController@addSemester');
Route::get('/list-semester', 'SemesterController@listSemester');

// grade
Route::get('/add-grade', 'GradeController@addGrade');
Route::get('/list-grade', 'GradeController@listGrade');

// class
Route::get('/add-class', 'ClassromController@addClass');
Route::get('/list-class', 'ClassromController@listClass');
Route::get('/view-class/IDCLASS', 'ClassromController@viewClass');
Route::get('/edit-class/IDCLASS', 'ClassromController@editClass');

// subject
Route::get('/add-subject', 'SubjectController@addSubject');
Route::get('/list-subject', 'SubjectController@listSubject');

// superuser
Route::get('/add-super-user', 'TeacherController@addTeacher');
Route::get('/list-super-user', 'TeacherController@listTeacher');

// student
Route::get('/add-student', 'StudentController@addStudent');
Route::get('/edit-student/IDSTUDENT', 'StudentController@editStudent');
Route::get('/list-student', 'StudentController@listStudent');
Route::get('/view-student/IDSTUDENT', 'StudentController@viewStudent');
