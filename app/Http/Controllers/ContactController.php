<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Bedrijf;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bedrijven = Bedrijf::all();
        return view('contact.create', ['bedrijven' => $bedrijven]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->bedrijf_id = $request->bedrijf_id;
        $contact->voornaam = $request->voornaam;
        $contact->achternaam = $request->achternaam;
        $contact->straat = $request->straat;
        $contact->huisnummer = $request->huisnummer;
        $contact->postcode = $request->postcode;
        $contact->plaats = $request->plaats;
        $contact->email = $request->email;
        $contact->telefoonnummer = $request->telefoonnummer;
        $contact->functie = $request->functie;

        $contact->save();

        return redirect()->route('bedrijf.show', $request->bedrijf_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $bedrijven = Bedrijf::all();
        return view('contact.edit', compact('bedrijven', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->bedrijf_id = $request->bedrijf_id;
        $contact->voornaam = $request->voornaam;
        $contact->achternaam = $request->achternaam;
        $contact->straat = $request->straat;
        $contact->huisnummer = $request->huisnummer;
        $contact->postcode = $request->postcode;
        $contact->plaats = $request->plaats;
        $contact->email = $request->email;
        $contact->telefoonnummer = $request->telefoonnummer;
        $contact->functie = $request->functie;
        $contact->save();
        return redirect()->route('bedrijf.show', $contact->bedrijf_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('bedrijf.show', $contact->bedrijf_id);
    }
}
