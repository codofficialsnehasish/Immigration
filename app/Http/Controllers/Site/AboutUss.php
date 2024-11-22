<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\AboutUs;

class AboutUss extends Controller
{
    public function index(){
        $about = AboutUs::find(1);
        $teams = Team::where('is_visible',1)->get();
        return view('site.about',compact('teams','about'));
    }
}
