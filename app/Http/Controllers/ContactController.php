<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function all_ask()
    {
        $contacts = Contact::all();
        return view('backend.ask.all_contacts' , compact('contacts'));
    }


    public function send_ask(ContactRequest $request)
    {
        $name     = $request->name;
        $email    = $request->email;
        $subject  = $request->subject;
        $message  = $request->message;

        $contact = Contact::create([
            'name'       => $name,
            'email'      => $email,
            'subject'    => $subject,
            'message'    => $message,
        ]);

        $contact->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->route('dashboard.all_ask');
    }
}
