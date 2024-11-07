<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faq;

class FAQController extends Controller
{
    public function index(){
        $faqs = Faq::where('is_visible',1)->get();
        return view('site.faq',compact('faqs'));
    }
}
