<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Validation
       
        $validator = Validator::make($request->all(),[
           
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required',
            
        ]);
 
          
        if($validator->fails())
        {
             
             $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
                
            return response()->json($response,400);   
        
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        
        $user = User::create($input);

        $success['token'] = $user->createToken('Myapp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' =>$success,
            'message' => 'User Regiser Successfully.'
        ];
                
        return response()->json($response,200);  
    }


    public function login(Request $request)
    {
        
        if(Auth::attempt(['email' =>$request->email,'password' => $request->password]))
        {
            $user = Auth::user();

            $success['token'] = $user->createToken('user')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
                'success' => true,
                'data' =>$success,
                'message' => 'User Login Successfully.'
            ];
                
            return response()->json($response,200);  

        }else{

            $response = [
                'success' => false,
                'message' => 'Unauthorized'
            ];
                
            return response()->json($response,200); 
        }
    }
    
}
