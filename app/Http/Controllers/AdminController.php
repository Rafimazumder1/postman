<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\contact;



class AdminController extends Controller
{
    public function admin_deshboard ()
    {
        $std = contact::all();
     return view('admin.admindeshboard')->with('contact',$std);
    }
   
}
