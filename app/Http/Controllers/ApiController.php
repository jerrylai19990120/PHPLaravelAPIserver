<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laravelUser;

class ApiController extends Controller
{
    //
    public function getAllLaravelUsers(){
        $users = laravelUser::get()->toJson(JSON_PRETTY_PRINT);
        return response($users);
    }

    public function createLaravelUser(Request $request){
        $laravel_users = new laravelUser();
        $laravel_users->username = $request->username;
        $laravel_users->password = $request->password;
        $laravel_users->save();

        return response()->json($laravel_users);
    }

    public function updateLaravelUser(Request $request, $id){
        if(laravelUser::where("id",$id)->exists()){
            $user = laravelUser::find($id);
            $user->username = is_null($request->username)?$user->username:$request->username;
            $user->password = is_null($request->password)?$user->password:$request->password;
            $user->save();
            return response()->json(["infoChanged"=>"true"], 200);
        }else{
            return response()->json(["404"=>"not found"], 404);
        }
    }

    public function deleteLaravelUser($id){
        if(laravelUser::where("id",$id)->exists()){
            $user = laravelUser::find($id);
            $user->delete();
            return response()->json(["deleted"=>"true"], 200);
        }else{
            return response()->json(["deleted"=>"false"], 400);
        }
    }

    public function getLaravelUser($id){
        if(laravelUser::where("id", $id)->exists()){
            $user = laravelUser::where("id", $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        }else{
            return response()->json(["status"=>"not found"], 404);
        }
    }

}
