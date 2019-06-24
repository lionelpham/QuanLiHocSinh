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
Route::get('/create-role', 'RolesController@createRole');
Route::get('/list-role', 'RolesController@listRole');
Route::post('/create-role/new','RolesController@newRole');
Route::get('/list-roles/delete/{id}','RolesController@deleteRole');
// account
Route::get('/add-account', 'AccountController@addAccount');
Route::get('/list-account', 'AccountController@listAccount');
Route::post('/add-account/newAcc','AccountController@newAccount');
Route::get('/list-account/edit-account/{id}', 'AccountController@editAccount');
Route::post('/list-account/edit-account/{id}', 'AccountController@updateAccount');

Route::get('/list-account/delete/{id}', 'AccountController@deleteAccount');

// semester
Route::get('/add-semester', 'SemesterController@addSemester');
Route::get('/list-semester', 'SemesterController@listSemester');
Route::post('/add-semester/new-semester','SemesterController@newSemester');
Route::get('/list-semester/delete/{id}','SemesterController@deleteSemester');
Route::get('/list-semester/edit-semester/{id}','SemesterController@editSemester');
Route::post('/list-semester/edit-semester/{id}','SemesterController@updateSemester');
// grade
Route::get('/add-grade', 'GradeController@addGrade');
Route::post('/add-grade/new-grade','GradeController@newGrade');
Route::get('/list-grade', 'GradeController@listGrade');
Route::get('/list-grade/delete/{id}','GradeController@deleteGrade');
Route::get('/list-grade/edit-grade/{id}','GradeController@editGrade');
Route::post('/list-grade/edit-grade/{id}','GradeController@updateGrade');
// class
Route::get('/add-class', 'ClassromController@addClass');
Route::post('/add-class/new','ClassromController@newClass');
Route::get('/list-class', 'ClassromController@listClass');
Route::get('/view-list-class/{id}', 'ClassromController@viewClass');
Route::get('/edit-class/{id}', 'ClassromController@editClass');
Route::post('/edit-class/update-info-class/{id}','ClassromController@updateClass');
Route::get('/view-class/{idClass}/{idSubject}', 'ClassromController@scoreboardClass');
Route::get('/view-class/{idClass}/{idSubject}/input-score', 'ClassromController@scoreboardClassInput');
Route::post('/view-class/update-score/{idClass}/{idSubject}','ClassromController@updateScore');
Route::get('/delete-class/{id}', 'ClassromController@deleteClass');

// subject
Route::get('/add-subject', 'SubjectController@addSubject');
Route::get('/list-subject', 'SubjectController@listSubject');
Route::post('/add-subject/newSub','SubjectController@newSubject');
Route::get('/list-subject/delete/{id}', 'SubjectController@deleteSubject');
Route::get('/list-subject/edit-subject/{id}', 'SubjectController@editSubject');
Route::post('/list-subject/edit-subject/{id}','SubjectController@updateSubject');
// superuser
Route::get('/add-super-user', 'TeacherController@addTeacher');
Route::get('/list-super-user', 'TeacherController@listTeacher');

// student
Route::get('/add-student', 'StudentController@addStudent');
Route::post('/add-student/new','StudentController@newStudent');
Route::get('/edit-student/{id}', 'StudentController@editStudent');
Route::post('/edit-student/{id}', 'StudentController@updateStudent');

Route::get('/list-student', 'StudentController@listStudent');
Route::get('/list-student/delete/{id}', 'StudentController@deleteStudent');
