<?php

namespace App\Http\Controllers;

use App\Models\Gesprek;
use App\Models\Bedrijf;
use Illuminate\Http\Request;

class GesprekController extends Controller
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
        return view('gesprek.create', ['bedrijven' => $bedrijven]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gesprek = new Gesprek;

        $gesprek->bedrijf_id = $request->bedrijf_id;
        $gesprek->gesprekdatum = $request->gesprekdatum;
        $gesprek->gesprektijd = $request->gesprektijd;
        $gesprek->gesprokenmet = $request->gesprokenmet;
        $gesprek->notitiegesprek = $request->notitiegesprek;

        $gesprek->save();

        return redirect()->route('bedrijf.show', $request->bedrijf_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gesprek $gesprek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gesprek $gesprek)
    {
        return view('gesprek.edit', compact('gesprek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gesprek $gesprek)
    {
        $gesprek->gesprekdatum = $request->gesprekdatum;
        $gesprek->gesprektijd = $request->gesprektijd;
        $gesprek->gesprokenmet = $request->gesprokenmet;
        $gesprek->notitiegesprek = $request->notitiegesprek;
        
        $gesprek->save();
        
        return redirect()->route('bedrijf.show', $gesprek->bedrijf_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gesprek $gesprek)
    {
        //
    }
}
