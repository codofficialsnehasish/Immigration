<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactInformation;

class ContactUs extends Controller
{
    public function index(){
        $content = ContactInformation::find(1);
        return view('site.contact',compact('content'));
    }
}
