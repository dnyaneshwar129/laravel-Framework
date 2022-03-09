<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginCotroller extends Controller
{
    public function loginpage()
    {
        return view('frontend.login');
    }
}
