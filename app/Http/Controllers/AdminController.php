<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\contact;



class AdminController extends Controller
{

public function admin_deshboard()
{
    $con = Contact::all();
    return view('admin.admindeshboard')->with('con', $con);
} 

   
}
