<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //post 
    public function store(Request $request){
        $contact = new Contact();
        $contact->naam = $request->get('naam');
        $contact->email = $request->get('email');
        $contact->bericht = $request->get('bericht');
        $contact->save();
        return redirect('/');
    }
    // get all
    public function index(){
        $contacts = Contact::all();
        return view('index', ['contacts' => $contacts]);
    }

    public function findContactUpdate($id){
        $contact = Contact::find($id);
        return view('update', ['contact'=> $contact]);
    }
    // update
    public function updateContact(Request $request, $id){
        $contact = Contact::find($id);
        $contact->naam = $request->get('naam');
        $contact->email = $request->get('email');
        $contact->bericht = $request->get('bericht');
        $contact->update();
        return redirect('/');
    }
    // delete contact
    public function destroyContact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('/');
    }

}

