<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Testimonials;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::where('visibility',1)->first();
        $testimonials = Testimonials::where('is_visible',1)->get();
        return view('site.welcome',compact('banner','testimonials'));
    }
}
