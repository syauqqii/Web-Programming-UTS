<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactUpdate;

class ContactController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $contact = Contact::all();

        return response()->json($contact);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUpdate $request, string $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->email = $request->email;
        $contact->facebook = $request->facebook;
        $contact->instagram = $request->instagram;
        $contact->github = $request->github;
        $contact->save();

        return response()->json($contact);
    }
}
