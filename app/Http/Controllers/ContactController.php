<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function services(){
        return view("services");
    }
    
    public function contact_us(){
        return view("contact_us");
    }

    public function about(){
        return view("about");
    }

    public function ourfilestore(Request $request){
        
        // 1. Validate the data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:14',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // 2. Save to Database
        $post = new contact;
        $post->name = $validated['name'];
        $post->phone = $validated['phone'];
        $post->subject = $validated['subject'];
        $post->message = $validated['message'];
        $post->save();

        // Redirect back with a Success Message
        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}