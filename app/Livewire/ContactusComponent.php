<?php

namespace App\Livewire;
use Livewire\Component;
// use Livewire\WithFileUploads;

use App\Models\ContactUs;

class ContactusComponent extends Component
{
    // use WithFileUploads;

    public $name, $email, $phone, $subject, $message;
    // public $file;
    public $formSubmitted = false;

    protected $rules = [
        'name' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
        'email' => 'required|email',
        'phone' => 'required|digits:10|regex:/^[6789]/',
        'subject' => 'nullable|max:255',
        'message' => 'nullable|string',
        // 'file' => 'nullable|file|max:10240', // Optional file validation
    ];

    public function submit()
    {
        $this->validate();

        $contact = new ContactUs();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->subject = $this->subject;

        // if ($this->file) {
        //     $contact->file_path = $this->file->store('uploads', 'public'); // Save the file
        // }

        $contact->message = $this->message;
        $contact->save();

        session()->flash('success', 'Thank You. Your Message has been Submitted');
        $this->formSubmitted = true;
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        // $this->reset(['file']);
    }
    
    public function render()
    {
        return view('livewire.contactus-component');
    }
}
