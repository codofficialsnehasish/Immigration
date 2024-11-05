<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\LegalInformation;

class LegalInfo extends Controller
{
    public function privacy_policy(){
        $privacy_policy = LegalInformation::where('id',1)->value('privacy_policy');
        return view('site.privacy-policy',compact('privacy_policy'));
    }

    public function data_security_measures(){
        $data_security_measures = LegalInformation::where('id',1)->value('data_security_measures');
        return view('site.data-security-measures',compact('data_security_measures'));
    }

    public function terms_conditions(){
        $terms_conditions = LegalInformation::where('id',1)->value('terms_conditions');
        return view('site.terms-conditions',compact('terms_conditions'));
    }
}
