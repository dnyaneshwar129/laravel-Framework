<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesCotroller extends Controller
{
    public function servicespage()
    {
        return view('frontend.services');
    }
}
