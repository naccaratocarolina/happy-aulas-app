<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SubjectRequest as SubjectRequest;


use App\Subject;

class SubjectController extends Controller
{
  public function createsubject(SubjectRequest $request)
  {
      $subject = new Subject;

      $subject->subject_name = $request->subject_name;
      // $subject->save();
      if (!Storage::exists('localIcons/'))
			   Storage::makeDirectory('localIcons/',0775,true);
      $file = $request->file('subject_icon');
      $filename = $subject->subject_name.'.'.$file->getClientOriginalExtension();
      $path = $file->storeAs('localIcons', $filename);
      $subject->subject_icon = $path;

      $subject->save();

      return response()->json($subject);
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
      if($request->subject_icon){
        $file = $request->file('subject_icon');
        $filename = $subject->id.'.'.$file->getClientOriginalExtension();
        $path = $file->storedAs('localIcons', $filename);
        $subject->subject_icon = $path;
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
