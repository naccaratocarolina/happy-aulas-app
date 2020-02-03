<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{
  public function createStudent(Request $request)
  {
      $student = new Student;
      $student->user_id = $request->user_id;
      $student->save();
  }

  public function listStudent(Request $request){
    $student = Student::all();
    return response()->json($student);
  }

  public function findStudent(Request $request, $id){
    $student = Student::findOrFail($id);
    return response()->json([$student]);
  }
  public function updateStudent(Request $request, $id){
    if($student){
      if($request->user_id){
        $student->user_id = $request->user_id;
      }
      $student->save();
      return response()->json([$student]);
    }
    else{
      return response()->json(['aluno nao encontrado']);
    }
  }

  public function deleteStudent(Request $request, $id){
    Student::destroy($id);
    return response()->json(['Aluno deletado']);
  }
}
