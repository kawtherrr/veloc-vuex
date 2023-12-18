<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(){
        $url = Socialite::driver('google')->stateless()->redirect()->getTargetUrl();
        return response()->json(["url" => $url]);
    }

    public function callbackGoogle(){
      
        try {
            
            $google_user = Socialite::driver('google')->stateless()->user();

            $user = User::where('google_id',$google_user->getId())->first();

            if(!$user){
                $new_user = array(
                    'name' =>$name = $google_user->getName(),
                    'email'=> $email = $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                );

                $response = [
                    'user' => $new_user,
                ];
        
                //return response($response,200);
                return response()->json(["user" => $new_user]);

            }else{

                //trying to login 
                $token = $user->createToken('mytoken')->plainTextToken;
                $response = [
                    'user' => $user,
                    'token' => $token
                ];
        
                return response()->json(["user" => $user]);

            }



        } catch (\Throwable $th) {
            dd('something went wrong '. $th);
        }
    }
}
