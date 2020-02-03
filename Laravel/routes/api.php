<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//user
Route::get('listusers','UserController@listUsers');
Route::get('finduser{id}','UserController@findUser');
Route::post('createuser','UserController@createUser');
Route::put('updateuser{id}','UserController@updateUser');
Route::delete('deleteuser{id}','UserController@deleteUser');

//teacher
Route::get('listteachers','TeacherController@listTeachers');
Route::get('findteacher{id}','TeacherController@findTeacher');
Route::post('createteacher','TeacherController@createTeacher');
Route::put('updateteacher{id}','TeacherController@updateTeacher');
Route::delete('deleteteacher{id}','TeacherController@deleteTeacher');

//student
Route::get('liststudents','StudentController@listStudents');
Route::get('findstudent{id}','StudentController@findStudent');
Route::post('createstudent','StudentController@createStudent');
Route::put('updatestudent{id}','StudentController@updateStudent');
Route::delete('deletestudent{id}','StudentController@deleteStudent');

//subject_teacher
Route::get('listsubject_teacher','Subject_TeacherController@listSubject_Teacher');
Route::get('findsubject_teacher{id}','Subject_TeacherController@findSubject_Teacher');
Route::post('createsubject_teacher','Subject_TeacherController@createSubject_Teacher');
Route::put('updatesubject_teacher{id}','Subject_TeacherController@updateSubject_Teacher');
Route::delete('deletesubject_teacher{id}','Subject_TeacherController@deleteSubject_Teacher');

//subject
Route::get('listsubjects','SubjectController@listSubjects');
Route::get('findsubject{id}','SubjectController@findSubject');
Route::post('createsubject','SubjectController@createSubject');
Route::put('updatesubject{id}','SubjectController@updateSubject');
Route::delete('deletesubject{id}','SubjectController@deleteSubject');

//session
Route::get('listsessions','SessionController@listSessions');
Route::get('findsession{id}','SessionController@findSession');
Route::post('createsession','SessionController@createSession');
Route::put('updatesession{id}','SessionController@updateSession');
Route::delete('deletesession{id}','SessionController@deleteSession');

//Passport
Route::post('register','API\PassportController@register');
Route::post('login','API\PassportController@login');
Route::group(['middleware'=> 'auth:api'], function(){
  Route::post('logout', 'API\PassportController@logout');
  Route::get('getDetails', 'API\PassportController@getDetails');
});
