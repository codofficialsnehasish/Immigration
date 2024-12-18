<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\WhyChooseUs;
use App\Models\OurServices;
use App\Models\HomeAbout;
use App\Models\EligibilityAssessment;
use App\Models\EligibilityAssessmentDetails;

class HomeDataController extends Controller
{
    public function index(){
        $banner = Banner::find(1);
        $why_choose_us = WhyChooseUs::all();
        $ourservices = OurServices::findOrFail(1);
        $home_about = HomeAbout::findOrFail(1);
        $eligibility_assessment = EligibilityAssessment::findOrFail(1);
        return view('admin.home.index',compact('banner','why_choose_us','ourservices','home_about','eligibility_assessment'));
    }

    public function why_choose_us_store(Request $request){
        WhyChooseUs::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_visible' => $request->is_visible,
        ]);
        return back()->with('success','Data Added Sucessfully');
    }

    public function why_choose_us_update(Request $request, string $id){
        $why_choose_us = WhyChooseUs::findOrFail($id);
        $why_choose_us->title = $request->title;
        $why_choose_us->description = $request->description;
        $why_choose_us->is_visible = $request->is_visible;
        if($why_choose_us->save()){
            return back()->with('success','Data Updated Sucessfully');
        }else{
            return back()->with('error','Data Not Updated');
        }
    }

    public function why_choose_us_delete(string $id){
        $why_choose_us = WhyChooseUs::findOrFail($id);
        $why_choose_us->delete();
        return back()->with('success','Data Deleted Sucessfully');
    }

    public function store_our_services(Request $request, string $id){
        $ourservices = OurServices::findOrFail($id);
        $ourservices->heading = $request->heading;
        $ourservices->title = $request->title;
        $ourservices->description = $request->description;
        if ($request->hasFile('image')) {
            $ourservices->clearMediaCollection();
            $ourservices->addMedia($request->file('image'))->toMediaCollection();
        }
        if($ourservices->update()){
            return back()->with('success','Data Updated Sucessfully');
        }else{
            return back()->with('error','Data Not Updated');
        }
    }

    public function update_home_about(Request $request, string $id){
        $home_about = HomeAbout::findOrFail($id);
        $home_about->heading = $request->heading;
        $home_about->description = $request->description;
        $home_about->title = $request->title;
        $home_about->left_description = $request->left_description;
        $home_about->right_description = $request->right_description;
        if($home_about->update()){
            return back()->with('success','Data Updated Sucessfully');
        }else{
            return back()->with('error','Data Not Updated');
        }
    }

    public function update_eligibility_assessment(Request $request, string $id){
        // return $request->all();
        $eligibility_assessment = EligibilityAssessment::find(1);
        $eligibility_assessment->heading = $request->heading;
        $eligibility_assessment->description = $request->description;
        $res = $eligibility_assessment->update();

        foreach($request->title as $key => $value){
            $eligibility_assessment_details = new EligibilityAssessmentDetails();
            $eligibility_assessment_details->eligibility_assessment_id = $eligibility_assessment->id;
            $eligibility_assessment_details->title = $request->title[$key];
            $eligibility_assessment_details->description = $request->data_description[$key];
            $eligibility_assessment_details->save();
        }

        if($res){
            return back()->with('success','Data Updated Sucessfully');
        }else{
            return back()->with('error','Data Not Updated');
        }
    }

    public function delete_eligibility_assessment_details(string $id){
        $eligibility_assessment_details = EligibilityAssessmentDetails::find($id);
        if($eligibility_assessment_details){
            $res = $eligibility_assessment_details->delete();
            if($res){
                return back()->with('success','Data Updated Sucessfully');
            }else{
                return back()->with('error','Data Not Updated');
            }
        }else{
            return back()->with('error','Data Not Found');
        }
    }
}
