<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//user
Route::get('listusers','UserController@listUsers');
Route::get('finduser/{id}','UserController@findUser');
Route::post('createuser','UserController@createUser');
Route::put('updateuser/{id}','UserController@updateUser');
Route::delete('deleteuser/{id}','UserController@deleteUser');
Route::get('showpicture/{id}','UserController@showPicture');

//teacher
Route::get('listteacher','TeacherController@listTeacher');
Route::get('findteacher/{id}','TeacherController@findTeacher');
Route::post('createteacher','TeacherController@createTeacher');
Route::put('updateteacher/{id}','TeacherController@updateTeacher');
Route::delete('deleteteacher/{id}','TeacherController@deleteTeacher');

// //student //nao faz mais sentido no bd
// Route::get('liststudents','StudentController@listStudents');
// Route::get('findstudent/{id}','StudentController@findStudent');
// Route::post('createstudent','StudentController@createStudent');
// Route::put('updatestudent/{id}','StudentController@updateStudent');
// Route::delete('deletestudent/{id}','StudentController@deleteStudent');

//subject_teacher
Route::get('listsubject_teacher','Subject_TeacherController@listSubject_Teacher');
Route::get('findsubject_teacher/{id}','Subject_TeacherController@findSubject_Teacher');
Route::post('createsubject_teacher','Subject_TeacherController@createSubject_Teacher');
Route::put('updatesubject_teacher/{id}','Subject_TeacherController@updateSubject_Teacher');
Route::delete('deletesubject_teacher/{id}','Subject_TeacherController@deleteSubject_Teacher');

//subject
Route::get('listsubjects','SubjectController@listSubjects');
Route::get('findsubject/{id}','SubjectController@findSubject');
Route::post('createsubject','SubjectController@createSubject');
Route::put('updatesubject/{id}','SubjectController@updateSubject');
Route::delete('deletesubject/{id}','SubjectController@deleteSubject');

//session
Route::get('listsessions','SessionController@listSessions');//only when logged
Route::get('findsession/{id}','SessionController@findSession');//only when logged
Route::post('createsession','SessionController@createSession');//only when logged
Route::put('updatesession/{id}','SessionController@updateSession');//only when logged
Route::delete('deletesession/{id}','SessionController@deleteSession');//only when logged

//Passport
Route::post('register','API\PassportController@register');
Route::post('login','API\PassportController@login');
Route::group(['middleware'=> 'auth:api'], function(){//so deixa se user for usuario autenticado
  Route::post('logout', 'API\PassportController@logout');
  Route::post('getDetails', 'API\PassportController@getDetails');
});
