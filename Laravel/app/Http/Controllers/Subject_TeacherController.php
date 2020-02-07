<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Subject_Teacher;
use App\Teacher;
use App\Subject;

class Subject_TeacherController extends Controller
{
  public function createSubject_Teacher(Request $request)
  {
      $subject_teacher = new Subject_Teacher;

      $subject_teacher->teacher_id = $request->teacher_id;
      $subject_teacher->subject_id = $request->subject_id;
      $subject_teacher->save();
  }

  public function listSubject_Teacher(Request $request){
    $subject_teacher = Subject_Teacher::all();
    return response()->json($subject_teacher);
  }

  public function findSubject_Teacher(Request $request, $id){
    $subject_teacher = Subject_Teacher::findOrFail($id);
    return response()->json([$subject_teacher]);
  }
  public function updateSubject_Teacher(Request $request, $id){
    $subject_teacher = Subject_Teacher::find($id);
    if($subject_teacher){
      if($request->teacher_id){
        $subject_teacher->teacher_id = $request->teacher_id;
      }
      if($request->subject_id){
        $subject_teacher->subject_id = $request->subject_id;
      }
      $subject_teacher->save();
      return response()->json([$subject_teacher]);
    }
    else{
      return response()->json(['instancias nao relacionadas ou nao existentes']);
    }
  }
  public function deleteSubject_Teacher(Request $request, $id){
    Subject_Teacher::destroy($id);
    return response()->json(['relacionamento deletado']);
  }
}
