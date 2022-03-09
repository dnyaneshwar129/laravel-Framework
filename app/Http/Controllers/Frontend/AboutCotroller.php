<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutCotroller extends Controller
{
    public function aboutpage()
    {
        return view('frontend.about');
    }
}
