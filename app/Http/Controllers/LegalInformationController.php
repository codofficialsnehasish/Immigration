<?php

namespace App\Http\Controllers;

use App\Models\LegalInformation;
use Illuminate\Http\Request;

class LegalInformationController extends Controller
{
    public function index()
    {
        $legal_information = LegalInformation::find(1);
        return view('admin.legal_information.index',compact('legal_information'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LegalInformation $legalInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LegalInformation $legalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $legal_information = LegalInformation::find(1);
        $legal_information->privacy_policy = $request->privacy_policy;
        $legal_information->data_security_measures = $request->data_security_measures;
        $legal_information->terms_conditions = $request->terms_conditions;
        $res = $legal_information->update();
        if($res){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('success','Not Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LegalInformation $legalInformation)
    {
        //
    }
}
