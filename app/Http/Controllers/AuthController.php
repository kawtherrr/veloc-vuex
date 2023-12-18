<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\VerifyEmailRequest;
use App\Http\Requests\AgencyGoogleSignupRequest;

class AuthController extends Controller
{

    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();

            return $next($request);
        });
    }

    public function currentUser(){
       $user= Auth::user();
       $agency= Agency::where('user_id',$user->id)->first();
       $response = [
        'user' => $user,
        'agency' => $agency,

       ];
       return response($response,200);
    }

    public function resendEmail($email){

        $user= User::where('email',$email)->first();

        if($user->email_verified_at == null){
            $user->update([
                'verification_code'=>$verification_code = Str::random(40)
            ]);
            $mail = Mail::to($email)->send(new EmailVerificationMail($user));
    
            $response = [
                'message' => 'verification email sent again!'
            ];
           return response($response,200);
        }else{

            $response = [
                'message' => 'email already verfied!',
                'code'=> '0'
            ];
           return response($response,200);

        }
       
    }

    public function sendEmail(VerifyEmailRequest $request){

            try {
                $user = User::create([
                    'id' => $id = rand(111111,999999),
                    'email'=>$request['email'],   
                    'password'=>Hash::make($request['password']),   
                    'verification_code'=>$verification_code = Str::random(40),
                ]);

                $mail = Mail::to($request['email'])->send(new EmailVerificationMail($user));
        
                $response = [
                    'message' => 'verification email sent!'
                ];
               return response($response,200);
            } catch (\Exception $e) {
                return response()->json([
                    'message :' => $e->getMessage()
                ]);
            }
    }

    public function ifEmailExits($email){

        $check= User::where('email',$email)->first();

        if($check){
            if($check->email_verified_at == null || $check->verification_code != 'verified'){

                $check->delete();

                $response = [
                    'message' => 'this email is not verified!'
                ];

                return response($response,204);

            }else{
                $response = [
                    'message' => 'this email is taken!'
                ];

                return response($response,200);
            }

        
        }else{
         
        $response = [
            'message' => 'this email is not registered!'
        ];

        return response($response,204);
    
    }

    }

    public function ifAgencyExists($agency_name){

            $check= Agency::where('agency_name',$agency_name)->first();

            if(!$check){
                
            $response = [
                'message' => 'this agency name is not registered!'
            ];

            return response($response,204);
            }else{

            $response = [
                'message' => 'agency name already used!'
            ];

            return response($response,200);}
    }

    public function signup(Request $request){

        $fields = $request->validate([
            'name' => 'required',
            'working_days' => 'required',
            'car_models2' => 'required',
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'agency_name' => 'required',
            'phone' => 'required',
            'agency_address' => 'required',
            'wilaya' => 'required',
            'city' => 'required',

        ]);

        $user= User::where('email',$request['email'])->first();

        $user->Update([
            'id' => $id = rand(111111,999999),
            'name'=>$request['name'],
            'verification_code'=> 'verified',
            'email_verified_at'=> Carbon::now(),
        ]);


            $days = $request['working_days'];
            $models = $request['car_models2'];

            $request['working_days'] = implode(', ', $days);
            $request['car_models2'] = implode(', ', $models);

        $agency = Agency::create([
            'user_id' => $id,
            'agency_name'=>$request['agency_name'],
            'phone'=>$request['phone'],
            'agency_address'=>$request['agency_address'],
            'wilaya'=>$request['wilaya'],
            'city'=>$request['city'],
            'car_models'=>$request['car_models2'],
            'working_days'=>$request['working_days'],
            'opening_hour'=>$request['opening_hour'],
            'closing_hour'=>$request['closing_hour'],

        ]);
    
            $response = [
                'agency' => $agency,
                'user' => $user,
                'message' => 'created user now!'
            ];
        return response($response,201);
        
        

  }

    public function signupWithGoogle(AgencyGoogleSignupRequest $request) {

            $user = User::create([
                'id' => $id = rand(111111,999999),
                'name'=>$request['name'],
                'email'=>$request['email'],
                'google_id'=>$request['google_id'],   
                'verification_code'=> 'verified',
                'email_verified_at'=> Carbon::now(),
                'password'=>Hash::make('password123456'),  
            ]);

            $days = $request['working_days'];
            $models = $request['car_models'];

            $request['working_days'] = implode(', ', $days);
            $request['car_models'] = implode(', ', $models);

            $agency = Agency::create([
                'user_id' => $id,
                'agency_name'=>$request['agency_name'],
                'phone'=>$request['phone'],
                'agency_address'=>$request['agency_address'],
                'wilaya'=>$request['wilaya'],
                'city'=>$request['city'],
                'car_models'=>$request['car_models'],
                'working_days'=>$request['working_days'],
                'opening_hour'=>$request['opening_hour'],
                'closing_hour'=>$request['closing_hour'],

            ]);

            Auth::login($user);


            $token = $user->createToken(time())->plainTextToken;

            // if(auth()->attempt(['email'=> $user->email,'password'=>$user->password])){
            //     $request->session()->regenerate();
            // }

           

              

            

                 $response = [
          
                    'token' => $token,
                    'agency' => $agency,
                    'user' => $user,
                    'message' => 'created user now!'
                ];
                // dd(Auth::user());

                // $userdata = array(
                //     'email' => $request['email'] ,
                //   );
                //   // attempt to do the login
                //   if (Auth::attempt($userdata))
                //     {
                //     // validation successful
                //     // do whatever you want on success
                //     }
                //     else
                //     {
                //     // validation not successful, send back to form
                //     return Redirect::to('checklogin');
                //     }

                

             return response()->json($response,201);
                
            

    }

    public function verify_email($verification_code){

            $user= User::where('verification_code',$verification_code)->first();

            if(!$user){

            $response = [

                'message' => 'invalid URL!'
            ];
            return response($response,3); // 3 means its invalid verification code for me
   
            }else{
            if($user->email_verified_at){

                $response = [
                    'user' => $user,
                    'message' => 'email already verified, try logging in!'
                ];
                return response($response,2); // 2 means its already verified for me
            }else{

                $user->update([
                    'email_verified_at'=> Carbon::now(),
                ]);

                $response = [
                    'user' => $user,
                    'message' => 'email successfully verified'
                ];
                return response($response,200);

            }
            }
    }


  

    public function login(Request $request){

        $fields = $request->validate([
            'email' => ['required','string','email'],
            'password' => 'required',
        ]);

        $user = User::where('email',$request['email'])->first();

        if(!$user || !Hash::check($request->password, $user->password) ){
            return response()->json(['message' => 'Could not process a user with the given email and password.'],  200);    
            }

            if(auth()->attempt(['email'=> $request->email,'password'=>$request->password])){
                $request->session()->regenerate();
            }
        

            $agency = Agency::where('user_id',$user->id)->first();

            $token = $user->createToken(time())->plainTextToken;

            $response = [
                'name' => $agency,
                'user' => $user,
                'token' => $token
            ];

            return  response()->json($response, 200);

  }

  public function logout(Request $request){
    // $request->session()->invalidate();
    if ($request->user()) { 
        $request->user()->tokens()->delete();
    }

    Auth::logout();
    Session::flush();

    
  }
}
