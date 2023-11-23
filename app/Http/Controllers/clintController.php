<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Auth;

class clintController extends Controller
{
    public function profile()
    {
        return view('client.c_profile');
    }
   
}
