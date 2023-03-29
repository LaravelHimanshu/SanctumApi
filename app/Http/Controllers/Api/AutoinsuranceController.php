<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; //Validator Method use to Add use Validator
use App\Models\Autoinsurance;

//Api Use Add Important
use Auth;

class AutoinsuranceController extends Controller
{
    public function index()
    {

        $autoinsurance = Autoinsurance::all();

        if($autoinsurance->count() > 0)
        {
            return response()->json([

                'status' => 200,
                'autoinsurance' => $autoinsurance
                
                ],200);
        }else{

            return response()->json([
                'status' => 404,
                'autoinsurance' => 'No Record Found'
                ],404);
        }    
         
    }

    public function store(Request $request)
    {
          
        $input = $request->all();

        $validator = Validator::make($request->all(),[
           
            'autozipcode'     => 'required|string|max:191',
            'autoexistpolicy' => 'required|string|max:191',
            'autocarname'     => 'required|string|max:191',
            'autocarmodel'    => 'required|string|max:191',
            'autocaryear'     => 'required',
            'autogender'      => 'required',
            'autobirthday'    => 'required',
            'autoaddress'     => 'required|string|max:191',
            'autofirstname'   => 'required|string|max:191',
            'autolastname'    => 'required|string|max:191',
            'autoemail'       => 'required|email|max:191',
            'autophone'       => 'required|digits:10',
            'autostatus'      => 'required',
    
        ]);

        // Sanctum Auth

        if(Auth::attempt(['autozipcode' => $input['autozipcode']]))
        {
            $data = Auth::User();
            $token = $data->createToken('user');

            return response()->json([

                    'status' => 200,
                    'token' => $token
                    
                    ],200);

            
        }

        if($validator->fails())
        {
             return response()->json([
                'status' => 422,
                'errors' => $validator->messages()

             ],422);   
        
        }else{
            
            $autoinsurance = Autoinsurance::create([
                
                'autozipcode'     => $request->autozipcode,
                'autoexistpolicy' => $request->autoexistpolicy,
                'autocarname'     => $request->autocarname,
                'autocarmodel'    => $request->autocarmodel,
                'autocaryear'     => $request->autocaryear,
                'autogender'      => $request->autogender,
                'autobirthday'    => $request->autobirthday,
                'autoaddress'     => $request->autoaddress,
                'autofirstname'   => $request->autofirstname,
                'autolastname'    => $request->autolastname,
                'autoemail'       => $request->autoemail,
                'autophone'       => $request->autophone,
                'autostatus'      => $request->autostatus,

            ]);

            if($autoinsurance)
            {
                return response()->json([

                    'status' => 200,
                    'message' => 'Auto Insurance Created Successfully'
                    
                    ],200);
            }else{

                return response()->json([
                    'status' => 500,
                    'message' => 'Something Went Wrong !'
                    ],500);
            }    
            }

    }

    public function show ($auto_id)
    {

        $autoinsurance = Autoinsurance::find($auto_id);

        if($autoinsurance)
        {
                return response()->json([

                    'status' => 200,
                    'autoinsurance' => $autoinsurance
                    
                    ],200);
            }else{

                return response()->json([
                    'status' => 404,
                    'message' => 'No Record Found !'
                    ],404);
            }    
    }
    

    public function edit($auto_id)
    {

        $autoinsurance = Autoinsurance::find($auto_id);

        if($autoinsurance)
        {
                return response()->json([

                    'status' => 200,
                    'autoinsurance' => $autoinsurance
                    
                    ],200);
            }else{

                return response()->json([
                    'status' => 404,
                    'message' => 'No Record Found !'
                    ],404);
            } 
    }

    public function update(Request $request, int $auto_id)
    {

        $validator = Validator::make($request->all(),[
           
            'autozipcode'     => 'required|string|max:191',
            'autoexistpolicy' => 'required|string|max:191',
            'autocarname'     => 'required|string|max:191',
            'autocarmodel'    => 'required|string|max:191',
            'autocaryear'     => 'required',
            'autogender'      => 'required',
            'autobirthday'    => 'required',
            'autoaddress'     => 'required|string|max:191',
            'autofirstname'   => 'required|string|max:191',
            'autolastname'    => 'required|string|max:191',
            'autoemail'       => 'required|email|max:191',
            'autophone'       => 'required|digits:10',
            'autostatus'      => 'required',
    
        ]);

        if($validator->fails())
        {
             return response()->json([
                'status' => 422,
                'errors' => $validator->messages()

             ],422);   
        
        }else{
            
            $autoinsurance = Autoinsurance::find($auto_id);

             
            if($autoinsurance)
            {
                $autoinsurance->update([
                
                'autozipcode'     => $request->autozipcode,
                'autoexistpolicy' => $request->autoexistpolicy,
                'autocarname'     => $request->autocarname,
                'autocarmodel'    => $request->autocarmodel,
                'autocaryear'     => $request->autocaryear,
                'autogender'      => $request->autogender,
                'autobirthday'    => $request->autobirthday,
                'autoaddress'     => $request->autoaddress,
                'autofirstname'   => $request->autofirstname,
                'autolastname'    => $request->autolastname,
                'autoemail'       => $request->autoemail,
                'autophone'       => $request->autophone,
                'autostatus'      => $request->autostatus,

                ]);    
                
                return response()->json([

                    'status' => 200,
                    'message' => 'Auto Insurance Update Successfully'
                    
                    ],200);
            }else{

                return response()->json([
                    'status' => 404,
                    'message' => 'No Such Autoinsurance Found!'
                    ],404);
            }    
            }
    }

    public function destroy($auto_id)
    {
        $autoinsurance = Autoinsurance::find($auto_id);

        if($autoinsurance)
        {
                $autoinsurance->delete();

                return response()->json([

                    'status' => 200,
                    'message' => 'Auto Insurance Delete Successfully'
                    
                    ],200);
            }else{

                return response()->json([
                    'status' => 404,
                    'message' => 'No Record Found !'
                    ],404);
            } 

    }
}
