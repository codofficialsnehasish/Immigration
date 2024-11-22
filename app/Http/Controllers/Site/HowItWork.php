<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\HowItWorks;

class HowItWork extends Controller
{
    public function index(){
        $how_it_works = HowItWorks::where('is_visible',1)->get();
        return view('site.how-it-works',compact('how_it_works'));
    }
}
