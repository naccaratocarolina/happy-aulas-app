<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\User;
use Auth;
use App\Http\Requests\LessonRequest as LessonRequest;

class LessonController extends Controller
{
  public function createLesson(LessonRequest $request)
  {
      $lesson = new Lesson;
      $lesson->lesson_time = $request->lesson_time ;
      $lesson->lesson_date = $request->lesson_date ;
      $lesson->teacher_name = $request->teacher_name ;
      $lesson->subject_name = $request->subject_name ;
      $lesson->location = $request->location ;
      $lesson->user_id = $request->user_id ;
      $lesson->subject_id = $request->subject_id ;
      $lesson->teacher_id = $request->teacher_id ;

      $lesson->save();
  }

  public function listLesson(){
    $user = Auth::user();
    $lesson = Lesson::where('user_id', $user->id)->get();
    return response()->json($lesson);
  }

  public function findLesson(Request $request, $id){
    $lesson = Lesson::findOrFail($id);
    return response()->json([$lesson]);
  }
  public function updateLesson(LessonRequest $request, $id){
    $lesson = Lesson::find($id);
    if($lesson){
      if($request->lesson_date){
        $lesson->lesson_date = $request->lesson_date;
      }
      if($request->lesson_time){
        $lesson->lesson_time = $request->lesson_time;
      }
      if($request->subject_name){
        $lesson->subject_name = $request->subject_name;
      }
      if($request->teacher_name){
        $lesson->teacher_name = $request->teacher_name;
      }
      if($request->location){
        $lesson->location = $request->location;
      }
      if($request->user_id){
        $lesson->user_id = $request->user_id;
      }
      if($request->teacher_id){
        $lesson->teacher_id = $request->teacher_id;
      }
      if($request->subject_id){
        $lesson->subject_id = $request->subject_id;
      }
      $lesson->save();
      return response()->json([$lesson]);
    }
    else{
      return response()->json(['Esta Aula nao existe']);
    }
  }
  public function deleteLesson(Request $request, $id){
    Lesson::destroy($id);
    return response()->json(['Aula deletada']);
  }
}