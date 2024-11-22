<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogResources extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_visible',1)->get();
        return view('site.blog_resources',compact('blogs'));
    }

    public function blog_details(Request $request)
    {
        $blog = Blog::where('slug',$request->slug)->first();
        if($blog){
            return view('site.blog-details',compact('blog'));
        }else{
            return back()->with('error','Not found any blog');
        }
    }
}
