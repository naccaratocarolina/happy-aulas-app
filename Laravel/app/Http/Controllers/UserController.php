<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Users as UserResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest as UserRequest;
use Auth;
use App\User;

class UserController extends Controller
{
    public function createUser(UserRequest $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;

        $user->save();

         If (!Storage::exists('localPhotos/')){
			      Storage::makeDirectory('localPhotos/');
          }
        $file = $request->file('profile_picture');
        $filename = $user->id.'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('localPhotos', $filename);
        $user->profile_picture = $path;

        $user->save();

        return response()->json([$user]);
    }

    public function listUser(Request $request){
        $paginator = User::paginate(10);
        $user = UserResource::collection($paginator);
        $last = $paginator -> lastPage();
        return response()->json([$user,$last]);
    }

    public function findUser(Request $request, $id){
        $user = User::findOrFail($id);
        return response()->json(new UserResource($user));
    }
    public function updateUser(UserRequest $request, $id){
        $user = User::find($id);
        if($user){
          if($request->name){
            $user->name = $request->name;
          }
          if($request->name){
            $user->profile_picture = $request->profile_picture;
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
          if($request->profile_picture){
            If (!Storage::exists('localPhotos/')){
               Storage::makeDirectory('localPhotos/');
             }
             $file = $request->file('profile_picture');
             $filename = $user->id.'.'.$file->getClientOriginalExtension();
             $path = $file->storeAs('localPhotos', $filename);
             $user->profile_picture = $path;
          }
        $user->save();
        return response()->json([$user]);
      }
      else{
        return response()->json(['Este usuario nao existe']);
      }
    }
    public function deleteUser(Request $request, $id){
      $user = User::findOrFail($id);
      Storage::delete($user->profile_picture);
      User::destroy($id);
      return response()->json(['User deletado']);
    }
    public function showPicture($id){
      $user = User::findOrFail($id);
      return Storage::download($user->profile_picture);
    }
    }
