<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Http\Resources\Teacher as TeacherResource;
use App\Teacher;
use App\Subject;
use App\User;

class TeacherController extends Controller
{
  
  //função que lista os professores que dao a materia
  public function findTeacherOfSubjects($id){//<-here!
    $teachers = Subject::find($id)->teachers;
    foreach ($teachers as $teacher) {
      $teacher = $teacher->with('user')->get();
    }
    return response()->json($teachers);
  }

  //lista todos os professores
  public function listTeacher(Request $request){
    $teacher = Teacher::all();
    return response()->json($teacher);
  }

  //encontra o professor
  public function findTeacher(Request $request, $id){
    $teacher = Teacher::findOrFail($id);
    return response()->json([$teacher]);
  }

  //atualiza o professor
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

  //deleta o professor
  public function deleteTeacher(Request $request, $id){
    Teacher::destroy($id);
    return response()->json(['professor deletado']);
  }
}
