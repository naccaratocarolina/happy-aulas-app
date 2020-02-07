<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Requests\UserRequest;
use App\User;
use Auth;

class PassportController extends Controller
{
    public $successStatus = 200;

    public function register(UserRequest $request){

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->c_password = bcrypt($request->c_password);
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
