<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Testimonials;
use App\Models\Service;
use App\Models\WhyChooseUs;
use App\Models\OurServices;
use App\Models\HomeAbout;
use App\Models\EligibilityAssessment;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::where('visibility',1)->first();
        $testimonials = Testimonials::where('is_visible',1)->get();
        $services = Service::where('visibility',1)->get();
        $why_choose_us = WhyChooseUs::where('is_visible',1)->get();
        $ourservices = OurServices::findOrFail(1);
        $home_about = HomeAbout::findOrFail(1);
        $eligibility_assessment = EligibilityAssessment::findOrFail(1);

        return view('site.welcome',compact('banner','testimonials','services','why_choose_us','ourservices','home_about','eligibility_assessment'));
    }
}
