<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassRequest as ClassRequest;

class ClassController extends Controller
{
  class classController extends Controller
  {
    public function createClass(ClassRequest $request)
    {
        $class = new Class;
        $class->class_time = $request->class_time ;
        $class->class_date = $request->class_date ;
        $class->teacher_name = $request->teacher_name ;
        $class->subject_name = $request->subject_name ;
        $class->location = $request->location ;
        $class->user_id = $request->user_id ;
        $class->subject_id = $request->subject_id ;
        $class->teacher_id = $request->teacher_id ;

        $class->save();
    }

    public function listClass(Request $request){
      $class = Class::all();
      return response()->json($class);
    }

    public function findClass(Request $request, $id){
      $class = Class::findOrFail($id);
      return response()->json([$class]);
    }
    public function updateClass(Request $request, $id){
      $class = Class::find($id);
      if($class){
        if($request->class_date){
          $class->class_date = $request->class_date;
        }
        if($request->class_time){
          $class->class_time = $request->class_time;
        }
        if($request->subject_name){
          $class->subject_name = $request->subject_name;
        }
        if($request->teacher_name){
          $class->teacher_name = $request->teacher_name;
        }
        if($request->location){
          $class->location = $request->location;
        }
        if($request->user_id){
          $class->user_id = $request->user_id;
        }
        if($request->teacher_id){
          $class->teacher_id = $request->teacher_id;
        }
        if($request->subject_id){
          $class->subject_id = $request->subject_id;
        }
        $class->save();
        return response()->json([$class]);
      }
      else{
        return response()->json(['Esta Aula nao existe']);
      }
    }
    public function deleteClass(Request $request, $id){
      Class::destroy($id);
      return response()->json(['Aula deletada']);
    }
  }
}
