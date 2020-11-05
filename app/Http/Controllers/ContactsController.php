<?php

/*
 * Ce fichier est la propriété de l8 (c) 2020
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
  public function create()
  {
    return view('contact');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'email'   => 'bail|required|email',
      'message' => 'bail|required|max:500',
    ]);

    // dd(\App\Models\Contact::create ($request->all ()));

    $contact          = new \App\Models\Contact();
    $contact->email   = $request->email;
    $contact->message = $request->message;
    $contact->save();

    return "C'est bien enregistré !";
  }
}
