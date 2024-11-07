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

    public function blog_details(string $id = null)
    {
        $blog = Blog::find($id);
        return view('site.blog-details',compact('blog'));
    }
}
