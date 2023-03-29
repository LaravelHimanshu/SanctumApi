<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    public function index()
    {

        $student = Student::all();

        if($student->count() > 0)
        {
            return response()->json([

                'status' => 200,
                'students' => $student
                
                ],200);
        }else{

            return response()->json([
                'status' => 404,
                'students' => 'No Record Found'
                ],404);
        }    
         
    }

    public function store(Request $request)
    {
          

        $validator = Validator::make($request->all(),[
            
            'name' => 'required|string|max:191',
            'course' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|digits:10',
        
        ]);

        if($validator->fails())
        {
             return response()->json([
                'status' => 422,
                'errors' => $validator->messages()

             ],422);   
        
        }else{
            
            $student = Student::create([
                'name' => $request->name,
                'course' => $request->course,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        }

    }

}
