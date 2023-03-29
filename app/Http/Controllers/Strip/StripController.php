<?php

namespace App\Http\Controllers\Strip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Validator;

class StripController extends Controller
{
    public function stripe()
    {
        return view('frontend.stripe');
    }

    public function stripePost(Request $request)
    {
         
     
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Stripe\Customer::create(array(
                "address" => [
                    "line1" => $request->address,
                    "postal_code" => $request->pincode,
                    "city" => $request->city,
                    "state" => $request->state,
                    "country" => $request->country,
                ],
                "email" =>  $request->email,
                "name" =>  $request->name,
                "source" => $request->stripeToken
            ));


        Stripe\Charge::create ([
                "amount" =>  $request->amount * 100,
                "currency" => "inr",
                "customer" => $customer->id,
                "description" => "Test payment from easyinsurancematch.com.",
                "shipping" => [
                    "name" => $request->name,
                    "address" => [
                         "line1" => $request->address,
                         "postal_code" => $request->pincode,
                         "city" => $request->city,
                         "state" => $request->state,
                         "country" => $request->country,
                    ],
                ]
        ]); 
        Session::flash('success', 'Payment successful!');
        return back();


    }
}
