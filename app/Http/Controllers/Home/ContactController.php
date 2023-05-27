<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Image;

class ContactController extends Controller
{
    public function Contact()
    {
        return view('frontend.contact');

    }

    public function StoreMessage(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'

        ],[
            'name.required'=>" Name is required",
        ]);

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at'=>Carbon::now()

        ]); 
        $notification = array(
        'message' => 'Message Created Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->route('contact.me')->with($notification);
    }

    public function ContactMessage()
    {
        $all_message = Contact::latest()->get();
        return view('admin.contact.message_all',compact('all_message'));
    }

    public function DeleteMessage($id)
    {
        Contact::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Message Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('contact.message')->with($notification);
    }

}
