<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest as UserRequest;
use App\User;
use DB;
use Auth;

class PassportController extends Controller
{
    public $successStatus = 200;

    public function register(UserRequest $request){//registra o usuario no bd(100%)

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);//senha encriptada
      $user->c_password = bcrypt($request->c_password);//confirmação da senha encriptada
      $user->save();
      $success['token'] = $user->createToken('MyApp')->accessToken;
      $success['name'] = $user->name;
      return response()->json([
        "message" => "cadastro realizado com sucesso!",
        "data" => [
          'user' => $user,
          'token' =>$token
          ]
        ], 200);
  }
  public function login(){//loga o usuario ja cadastrado no bd(100%)
      if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        $user = Auth::user();
        $token = $user->createToken('MyApp')->accessToken;
        $name = $user->name;
        return response()->json([
          "message" => "login realizado com sucesso!",
          "data" => [
            'user' => $user,
            'token' => $token
            ]
          ], 200);
      }
      else{
        return response()->json([
          "message" => "email e senha invalidos!",
          "data" => [
            null
            ]
          ], 500);
        }

  }
  public function getDetails(){//recupera informação do user(100%)
      $user = Auth::user();
      return response()->json(['success' => $user], 200);
  }
  public function logout(){//revoga o token do usuario(100%)
    $accessToken = Auth::user()->token();
    DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)->update(['revoked' => true]);
    $accessToken->revoke();
    return response()->json('Usuario deslogado!', 200);
  }
}
