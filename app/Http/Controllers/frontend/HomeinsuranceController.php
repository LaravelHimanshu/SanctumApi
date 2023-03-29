<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeinsuranceController extends Controller
{
    public function index()
    {
        return view('frontend.homeinsurance');//homeinsurance blade php file load
    }
}
