<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function create()
    {
     
        $url =url('/seller/create');
        $seller =null;
        $title ="Seller Regisatration";
        $data =compact( 'seller', 'url','title');
      
        return view('frontend.register')->with($data);
    }


    public function store(Request $request){
       
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:posts|max:150',
                'password' => 'required',
                'password_confirmation' => 'required|confirmed'
            ]
            );
    //     echo "<pre>";
    //     print_r($request->all());
    // //    p($request->all());
    //     die;
        // Insert Query
        $seller = new Seller;
        $seller->name = $request['name'];
        $seller->email = $request['email'];
        $seller->bussinessname = $request['businessname'];
        $seller->avatar = $request['avatar'];
    //    $seller->dob = null;
     //   $seller->country = $request['country'];
        $seller->password = md5($request['password']);
        $seller->save();
      //  return view('frontend.register');
        echo 'OK';
    //    
     //   return redirect('/login');

    }
}
