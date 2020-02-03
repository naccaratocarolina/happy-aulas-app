<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Session;
use App\Teacher;
use App\User;


class SessionController extends Controller
{
  public function createsession(Request $request)
  {
      $session = new Session;

      $session->session_date_time = $request->session_date_time;
      $session->price = $request->price;
      $session->user_id = $request->user_id;
      $session->teacher_id = $request->teacher_id;
      $seesion->save();
  }

  public function listsession(Request $request){
    $session = Session::all();
    return response()->json($session);
  }

  public function findsession(Request $request, $id){
    $session = Session::findOrFail($id);
    return response()->json([$session]);
  }
  public function updatesession(Request $request, $id){
    $session = Session::find($id);
    if($session){
      if($request->teacher_id){
        $session->teacher_id = $request->teacher_id;
      }
      if($request->user_id){
        $session->user_id = $request->user_id;
      }
      if($request->price){
        $session->price = $request->price;
      }
      if($request->session_date_time){
        $session->session_date_time = $request->session_date_time;
      }
      $session->save();
      return response()->json([$session]);
    }
    else{
      return response()->json(['Aula atualizada']);
    }
  }
  public function deleteSession(Request $request, $id){
    Session::destroy($id);
    return response()->json(['Aula deletada']);
  }
}
