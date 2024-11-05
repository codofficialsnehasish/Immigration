<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'title' => 'nullable|max:255',
            'description' => 'required',
            'rating' => 'required|numeric|between:1,5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $testimonial = new Testimonials();
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->rating = $request->rating;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time(). '_' .$img->getClientOriginalName();
            $directory = public_path('web-directory/testimonial');
            $img->move($directory, $filename);
            $filePath = "web-directory/testimonial/".$filename;
            $testimonial->image = $filePath;
        }
        $testimonial->is_visible = $request->is_visible;
        $res = $testimonial->save();
        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('error','Not Created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
            'title' => 'nullable|max:255',
            'description' => 'required',
            'rating' => 'required|numeric|between:1,5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $testimonial = Testimonials::find($id);
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->rating = $request->rating;
        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                $existingImagePath = public_path($testimonial->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            $img = $request->file('image');
            $filename = time(). '_' .$img->getClientOriginalName();
            $directory = public_path('web-directory/testimonial');
            $img->move($directory, $filename);
            $filePath = "web-directory/testimonial/".$filename;
            $testimonial->image = $filePath;
        }
        $testimonial->is_visible = $request->is_visible;
        $res = $testimonial->update();
        if($res){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonials::find($id);
        if($testimonial){
            if ($testimonial->image) {
                $existingImagePath = public_path($testimonial->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            $res = $testimonial->delete();
            if($res){
                return back()->with('success','Deleted Successfully');
                // return response()->json(['success' => 'Banner deleted successfully.']);
            }else{
                return back()->with('error','Not Deleted');
                // return response()->json(['error' => 'Banner Not Deleted.']);
            }
        }else{
            return back()->with('error','Not Found');
            // return response()->json(['error' => 'Banner Not Found.']);
        }
    }
}
