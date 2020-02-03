<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Teacher;
use App\User;

class TeacherController extends Controller
{
  public function createTeacher(Request $request)
  {
      $teacher = new Teacher;

      $teacher->bio = $request->bio;
      $teacher->user_id = $request->user_id;
      $teacher->save();

  }

  public function listTeacher(Request $request){
    $teacher = Teacher::all();
    return response()->json($teacher);
  }

  public function findTeacher(Request $request, $id){
    $teacher = Teacher::findOrFail($id);
    return response()->json([$teacher]);
  }
  public function updateteacher(Request $request, $id){
    $teacher = Teacher::find($id);
    if($teacher){
      if($request->bio){
        $teacher->bio = $request->bio;
      }
      if($request->user_id){
        $teacher->user_id = $request->user_id;
      }
      $teacher->save();
      return response()->json([$teacher]);
    }
    else{
      return response()->json(['Este professor nao existe']);
    }
  }
  public function deleteTeacher(Request $request, $id){
    Teacher::destroy($id);
    return response()->json(['professor deletado']);
  }
}
