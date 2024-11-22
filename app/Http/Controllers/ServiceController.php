<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->longs_description;
        $service->price = $request->price;
        if ($request->hasFile('image')) {
            /*
                $img = $request->file('image');
                $filename = time(). '_' .$img->getClientOriginalName();
                $directory = public_path('web-directory/services');
                $img->move($directory, $filename);
                $filePath = "web-directory/services/".$filename;
                $service->image = $filePath;
            */
            $service->addMedia($request->file('image'))->toMediaCollection();
        }
        $service->visibility = $request->visibility;
        $res = $service->save();
        if($res){
            return back()->with('success','Created Successfully');
        }else{
            return back()->with('success','Not Created');
        }
    }

    public function show(Service $service)
    {
        //
    }

    public function edit(string $id)
    {
        $service = Service::find($id);
        return response()->json($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        $service->price = $request->price;
        if ($request->hasFile('image')) {
            /*  if ($service->image) {
                    $existingImagePath = public_path($service->image);
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
                }
                $img = $request->file('image');
                $filename = time(). '_' .$img->getClientOriginalName();
                $directory = public_path('web-directory/services');
                $img->move($directory, $filename);
                $filePath = "web-directory/services/".$filename;
                $service->image = $filePath;
            */
            $service->clearMediaCollection();
            $service->addMedia($request->file('image'))->toMediaCollection();
        }
        $service->visibility = $request->visibility;
        $res = $service->update();
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
        $service = Service::find($id);
        if($service){
            /*if ($service->image) {
                $existingImagePath = public_path($service->image);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }*/
            $res = $service->delete();
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
