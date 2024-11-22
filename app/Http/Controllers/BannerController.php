<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('admin.banner.index',compact('banners'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'visibility' => 'required|in:0,1'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->description = $request->description;
        if ($request->hasFile('image')) {
            $banner->addMedia($request->file('image'))->toMediaCollection();
        }
        $banner->visibility = $request->visibility;
        $res = $banner->save();
        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('success','Not Created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'visibility' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->description = $request->description;
        if ($request->hasFile('image')) {
            $banner->clearMediaCollection();
            $banner->addMedia($request->file('image'))->toMediaCollection();

            // if ($banner->image) {
            //     $existingImagePath = public_path($banner->image);
            //     if (file_exists($existingImagePath)) {
            //         unlink($existingImagePath);
            //     }
            // }
            // $img = $request->file('image');
            // $filename = time(). '_' .$img->getClientOriginalName();
            // $directory = public_path('web-directory/banner');
            // $img->move($directory, $filename);
            // $filePath = "web-directory/banner/".$filename;
            // $banner->image = $filePath;
        }
        $banner->visibility = $request->visibility;
        $res = $banner->update();
        if($res){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('success','Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        if($banner){
            $res = $banner->delete();
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
