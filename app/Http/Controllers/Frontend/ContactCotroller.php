<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactCotroller extends Controller
{
    public function contactpage()
    {
        return view('frontend.contact');
    }
}
