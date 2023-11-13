<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Auth;




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

    public function delivery_info()
    {
        return view('customer.delivery_info',);
    }

    public function delivery_calculator()
{
    return view('customer.calculat');
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
        $data['Password']=MD5($request->Pass);
        $data['gender']=$request->gender;
        $data['city']=$request->city;
        $data['Country']=$request->Country;
        $user=DB::table('user_registration')->insertGetId($data);

        return  Redirect::to('/login')->with('Success','Account has been created.');
     // echo "hi";
     }

      public function login_form(Request $request)
     {
        
        $Email=$request->Email;
        $pass=MD5($request->Password);
        $data=DB::Table('user_registration')
        ->where ('Email',$Email)
        ->where ('Password',$pass)
        ->first();
        if($data){
            Session::put('Email',$Email);
            return  Redirect::to('/delivery_info')->with('Success','Account has been created.');
// echo "hello";

            // return Redirect::to('/Home');
        }
        else{
            return redirect('/login')->with('flash_message_error','Email Or Password Not Valid');
            // echo "hi";

        }
    }
    public function delivery_form(Request $request)
{

    $data=array();
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['parcel_Type']=$request->parcel_Type;
        $data['parcel pickup date']=$request->parcel_pickup_date;
        $data['parcel pickup address']=$request->parcel_pickup_address;
        $data['receive name']=$request->receive_name;
        $data['receive phone']=$request->receive_phone;
        $data['receive email']=$request->receive_email;
        $data['receive city']=$request->receive_city;
        $data['receive address']=$request->receive_address;
        $user=DB::table('delivery')->insertGetId($data);

        return  Redirect::to('/show')->with('Success','Account has been created.');
     // echo "hi";
     }

     public function show(Request $request)
    {

    
        echo "hellow";
        // return view('customer.show_form',);
    }


 public function calculat_result(Request $request)
 {
    $distance = $request->input('distance');
    $weight = $request->input('weight');
    
    // Implement your delivery charge calculation logic here.
    // You can use the $distance and $weight variables to calculate the charge.

    // For example, a simple calculation:
    $charge = $distance * $weight * 0.1; // Modify this as per your pricing strategy.

    return view('delivery.result', compact('charge'));



 }
    



}

