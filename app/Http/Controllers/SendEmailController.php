<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class SendEmailController extends Controller
{
    public function index()
    {
      Mail::to('himanshumca@yahoo.in')->send(new TestMail());

       if (count(Mail::failures()) > 0) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }

         
    }
}
