<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{

    public function Home()
    {
        return view('Home',);
    }


    public function login()
    {
        return view('login',);
    }

    public function register()
    {

        return view('register',);
    }
    public function About()
    {
        return view('register',);
    }

    

    public function recever()
    {
        return view('recever',);
    }


    public function register_form(Request $request)
     {
         $data=array();
        $data['First name']=$request->fname;
        $data['last name']=$request->lname;
        $data['email']=$request->email;
        $data['password']=MD5($request->pass);
        $data['gender']=$request->gender;
        $data['city']=$request->city;
        $data['Country']=$request->Country;
        $user=DB::table('user_registration')->insertGetId($data);

        return  Redirect::to('/login')->with('Success','Account has been created.');
    // echo "hi";
     }



     
}
