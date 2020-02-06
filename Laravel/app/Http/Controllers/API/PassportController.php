<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PassportController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request){
      //$validator = Validator::make($request -> all(),
    //   [
    //   'nome' => 'required|alpha',
    //   'password' =>'required',
    //   'email' => 'required|email|unique',
    //   'phone_number' => 'required|celular',
    //   'cpf' => 'required|cpf',
    //   'address' => 'required|string',
    // ]);
    //   if ($validator->fails()){
    //     return response()-> json(['error' => $validator->errors()], 401);
    //   }
      $user = new User;
      $user->name = $request->name;
      $user->password = bcrypt($request->password);
      $user->email = $request->email;
      $user->phone_number = $request->phone_number;
      $user->cpf = $request->cpf;
      $user->is_admin = $request->is_admin;
      $user->address = $request->address;
      $user->save();
      $success['token'] = $user->createToken('MyApp')->accessToken;
      $success['name'] = $user->name;
      return response()->json(['success' => $success],200);
  }
  public function login(){
    if(Auth::attempt(['email' => $request('email'), 'password' => $request('password')])){
      $user = Auth::user();
      $success['token'] = $user->createToken('MyApp')->accessToken;
      return response()->json(['success' => $success],200);
    }
    else{
      return response()->json(['error' => 'Unauthorized'],401);
    }
  }
  public function getDetails(){
    $user = Auth::user();
    return response()->json(['success' => $user], 200);
  }
  public function logout(){
    $accessToken = Auth::user()->token();
    DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
    $accessToken->revoke();
    return response()->json( null, 204);
  }
}
