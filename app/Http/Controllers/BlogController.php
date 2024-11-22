<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->short_content = $request->short_content;
        $blog->slug = createSlug($request->title,Blog::class);
        $blog->author_name = 'Admin';
        if ($request->hasFile('image')) {
            $blog->addMedia($request->file('image'))->toMediaCollection();
        }
        $blog->is_visible = $request->is_visible;
        $res = $blog->save();

        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('success','Not Created');
        }
    }

    public function show(Blog $blog)
    {
        //
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->short_content = $request->short_content;
        if($blog->title !== $request->title){
            return 'changed';
            $blog->slug = createSlug($request->title,Blog::class);
        }
        $blog->author_name = 'Admin';
        if ($request->hasFile('image')) {
            $blog->clearMediaCollection();
            $blog->addMedia($request->file('image'))->toMediaCollection();
        }
        $blog->is_visible = $request->is_visible;
        $res = $blog->update();

        if($res){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('success','Not Updated');
        }
    }

    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        if($blog){
            $res = $blog->delete();
            if($res){
                return back()->with('success','Deleted Successfully');
            }else{
                return back()->with('error','Not Deleted');
            }
        }else{
            return back()->with('error','Not Found');
        }
    }
}
