<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Subject;

class SubjectController extends Controller
{
  public function createsubject(Request $request)
  {
      $subject = new Subject;

      $subject->subject_name = $request->subject_name;
      $subject->save();
  }

  public function listsubjects(Request $request){
    $subject = Subject::all();
    return response()->json($subject);
  }

  public function findsubject(Request $request, $id){
    $subject = Subject::findOrFail($id);
    return response()->json([$subject]);
  }
  public function updatesubject(Request $request, $id){
    $subject = Subject::find($id);
    if($subject){
      if($request->subject_name){
        $subject->subject_name = $request->subject_name;
      }
      $subject->save();
      return response()->json([$subject]);
    }
    else{
      return response()->json(['Esta materia nao existe']);
    }
  }
  public function deletesubject(Request $request, $id){
    Subject::destroy($id);
    return response()->json(['materia deletado']);
  }
}
