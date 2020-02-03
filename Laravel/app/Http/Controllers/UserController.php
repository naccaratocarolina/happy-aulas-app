<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    public function createUser(UserRequest $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->cpf = $request->cpf;
        $user->address = $request->address;
        $user->save();
    }

    public function listUsers(Request $request){
      $user = User::all();
      return response()->json($user);
    }

    public function findUser(Request $request, $id){
      $user = User::findOrFail($id);
      return response()->json([$user]);
    }
    public function updateUser(Request $request, $id){
      $user = User::find($id);
      if($user){
        if($request->name){
          $user->name = $request->name;
        }
        if($request->password){
          $user->password = $request->password;
        }
        if($request->email){
          $user->email = $request->email;
        }
        if($request->phone_number){
          $user->phone_number = $request->phone_number;
        }
        if($request->cpf){
          $user->cpf = $request->cpf;
        }
        if($request->address){
          $user->address = $request->address;
        }
        $user->save();
        return response()->json([$user]);
      }
      else{
        return response()->json(['Este usuario nao existe']);
      }
    }
    public function deleteUser(Request $request, $id){
      User::destroy($id);
      return response()->json(['User deletado']);
    }
}
