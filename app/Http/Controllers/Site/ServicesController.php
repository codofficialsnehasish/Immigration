<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::where('visibility',1)->get();
        return view('site.services',compact('services'));
    }

    public function details(string $id)
    {
        $service = Service::find($id);
        if($service){
            return view('site.services-details',compact('service'));
        }else{
            return back()->with('error','Data Not found');
        }

        return view('site.services-details',compact('service'));
    }

}
