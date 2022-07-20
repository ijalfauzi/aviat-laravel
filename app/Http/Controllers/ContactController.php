<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact-us');
    }

    public function show()
    {
        $contacts = Contact::all();

        return view('contact.data', compact('contacts'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'perusahaan' => 'required',
            'domisili' => 'required',
            'kebutuhan' => 'required'
        ]);
        
        $contact = new Contact();

        $contact->nama = $request->nama;
        $contact->whatsapp = $request->whatsapp;
        $contact->email = $request->email;
        $contact->perusahaan = $request->perusahaan;
        $contact->domisili = $request->domisili;
        $contact->kebutuhan = $request->kebutuhan;
        $contact->save();

        \Mail::send('contact.contact_email',
             array(
                'nama' => $request->get('nama'),
                'whatsapp' => $request->get('whatsapp'),
                'email' => $request->get('email'),
                'perusahaan' => $request->get('perusahaan'),
                'domisili' => $request->get('domisili'),
                'kebutuhan' => $request->get('kebutuhan'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('admin@example.com');
               });

        return back()->with('success', 'Terima kasih telah menghubungi kami!');
    }
}
