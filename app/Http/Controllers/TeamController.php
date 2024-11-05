<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index',compact('teams'));
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
            'position' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time(). '_' .$img->getClientOriginalName();
            $directory = public_path('web-directory/teams');
            $img->move($directory, $filename);
            $filePath = "web-directory/teams/".$filename;
            $team->image = $filePath;
        }
        $team->is_visible = $request->is_visible;
        $res = $team->save();
        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('success','Not Created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
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
            'position' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_visible' => 'required|in:0,1'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $team = Team::find($id);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        if ($request->hasFile('image')) {
            if ($team->image) {
                $existingImagePath = public_path($team->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            $img = $request->file('image');
            $filename = time(). '_' .$img->getClientOriginalName();
            $directory = public_path('web-directory/teams');
            $img->move($directory, $filename);
            $filePath = "web-directory/teams/".$filename;
            $team->image = $filePath;
        }
        $team->is_visible = $request->is_visible;
        $res = $team->save();
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
        $team = Team::find($id);
        if($team){
            if ($team->image) {
                $existingImagePath = public_path($team->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
            $res = $team->delete();
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
