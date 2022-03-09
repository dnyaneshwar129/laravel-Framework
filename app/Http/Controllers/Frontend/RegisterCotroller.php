<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterCotroller extends Controller
{
    public function registerpage()
    {
        return view('frontend.register');
    }

    public function upload(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());

         $filename =time()."-dnyan.".$request->file('avatar')->getClientOriginalExtension();
        
        //  $request->file('avatar')->store('uploads'); // for laravel filename excripted
      echo   $request->file('avatar')->storeAs('uploads', $filename); 
    }
  

    
}
