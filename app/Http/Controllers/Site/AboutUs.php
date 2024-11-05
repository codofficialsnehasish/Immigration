<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team;

class AboutUs extends Controller
{
    public function index(){
        $teams = Team::where('is_visible',1)->get();
        return view('site.about',compact('teams'));
    }
}
