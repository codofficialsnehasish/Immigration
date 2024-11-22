<?php

namespace App\Http\Controllers;

use App\Models\HowItWorks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HowItWorksController extends Controller
{
    public function index()
    {
        $how_it_works = HowItWorks::all();
        return view('admin.how-it-works.index',compact('how_it_works'));
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
            'title' => 'required',
            'description' => 'required',
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $how_it_work = new HowItWorks();
        $how_it_work->title = $request->title;
        $how_it_work->description = $request->description;
        if ($request->hasFile('image')) {
            $how_it_work->addMedia($request->file('image'))->toMediaCollection();
        }
        $how_it_work->is_visible = $request->is_visible;
        $res = $how_it_work->save();
        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('error','Not Created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(HowItWorks $howItWorks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HowItWorks $howItWorks)
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
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $how_it_work = HowItWorks::find($id);
        $how_it_work->title = $request->title;
        $how_it_work->description = $request->description;
        if ($request->hasFile('image')) {
            $how_it_work->clearMediaCollection();
            $how_it_work->addMedia($request->file('image'))->toMediaCollection();
        }
        $how_it_work->is_visible = $request->is_visible;
        $res = $how_it_work->update();
        if($res){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Not Updated');
        }
    }

    public function destroy(string $id)
    {
        $how_it_work = HowItWorks::findOrFail($id);
        if($how_it_work){
            $res = $how_it_work->delete();
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
