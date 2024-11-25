<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class Dashboard extends Controller
{
    public function index(){
        $contacts = ContactUs::all()->count();
        return view('admin.dashboard',compact('contacts'));
    }
}
