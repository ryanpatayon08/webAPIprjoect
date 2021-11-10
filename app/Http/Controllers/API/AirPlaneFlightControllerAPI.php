<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;

class AirPlaneFlightControllerAPI extends Controller
{
    public $successStatus = 200;
    
    public function login(){
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] = Str::random(64); //generate token
            $success['username'] = $user->username;
            $success['id'] = $user->id;
            $success['name'] = $user->name;

            //saving token to database
            $user->remember_token = $success['token'];
            $user->save();
            //---

            $logs = new Logs();
            $logs->userid = $user->id;
            $logs->log="Login";
            $logs->logdetails="User $user->username has logged in";
            $logs->logtype="API Login";
            $log->save();

            return response()->json($success, $this->successStatus);
    
        }else {
            return response()->json(['response' => 'User not found'], 404);
        }
    }
    //register new user---
    public function register(Request $request){
        //add new user---
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //validate--
        if($validator->fails()) {
            return response()->json(['response' => $validator->errors()], 401);
        } else {
            $input = $request->all();
            //check email if already existing or not
            if(User::where('email', $input['email']->exists())) {
                return response()->json(['response' => 'Email already exists'], 401);
            } else if(User::where('username', $input['username']->exists())) {
                //check username if already existing or not
                return response()->json(['response' => 'Username already exists'], 401);

            } else {
                //bcrypt password
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);
               
                $success['token'] = Str::random(64); //generate token
                $success['username'] = $user->username;
                $success['id'] = $user->id;
                $success['name'] = $user->name;

                return response()->json($success, $this->successStatus);         
                   
            }
        }
        
    }
    

}


?>