<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//user
Route::get('listusers','UserController@listUsers');
Route::get('mylessons','UserController@MyLesson');
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

//lesson
//Route::get('listlesson','LessonController@listLesson');
Route::get('findlesson/{id}','LessonController@findLesson');
//Route::post('createlesson','LessonController@createLesson');
Route::put('updatelesson/{id}','LessonController@updateLesson');
Route::delete('deletelesson/{id}','LessonController@deleteLesson');

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

//Passport
Route::post('register','API\PassportController@register');
Route::post('login','API\PassportController@login');
Route::group(['middleware'=> 'auth:api'], function(){//so deixa se user for usuario autenticado
  Route::get('listlesson','LessonController@listLesson');
  Route::post('createlesson','LessonController@createLesson');
  Route::post('addlesson','LessonController@addLesson');
  Route::post('logout', 'API\PassportController@logout');
  Route::post('getDetails', 'API\PassportController@getDetails');
});
