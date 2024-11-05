<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactUs::all();
        return view('admin.contact-us.index',compact('contacts'));
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
            'email' => 'required|email',
            'phone' => 'required|digits:10|regex:/^[6789]/|',
            'subject' => 'required|max:255', 
            'message' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $res = $contact->save();
        if($res){
            return back()->with('success','Data Stored Successfully');
        }else{
            return back()->with('error','Failed, Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactUs::find($id);
        if($contact){
            $res = $contact->delete();
            if($res){
                return back()->with('success','Data Deleted Successfully');
            }else{
                return back()->with('error','Failed, Please try again');
            }
        }else{
            return back()->with('error','Not Found');   
        }
    }
}
