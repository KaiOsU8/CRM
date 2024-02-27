<?php

namespace App\Http\Controllers;

use App\Models\Bedrijf;
use Illuminate\Http\Request;

class BedrijfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bedrijf.index', [
            'bedrijfs' => Bedrijf::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bedrijf.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bedrijf = new Bedrijf;
        $bedrijf->bedrijfsnaam = $request->bedrijfsnaam;
        $bedrijf->kvk_nummer = $request->kvk_nummer;
        $bedrijf->isbedrijf = $request->has('isbedrijf') ? 1 : 0;
    
        $bedrijf->save();
    
        return redirect('/bedrijf');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bedrijf = Bedrijf::with('contacts')->find($id);
        return view('bedrijf.show', compact('bedrijf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bedrijf = Bedrijf::find($id);
        return view('bedrijf.edit', compact('bedrijf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bedrijf = Bedrijf::find($id);
        $bedrijf->bedrijfsnaam = $request->bedrijfsnaam;
        $bedrijf->kvk_nummer = $request->kvk_nummer;
        $bedrijf->isbedrijf = $request->has('isbedrijf') ? 1 : 0;
    
        $bedrijf->save();
    
        return redirect('/bedrijf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bedrijf = Bedrijf::find($id);
        $bedrijf->delete();
    
        return redirect('/bedrijf');
    }

    /**
     * Display the total of all bedrijf.
     */
    public function showDashboard()
    {
        $count = Bedrijf::count();
        return view('dashboard', compact('count'));
    }

    protected static function boot()
    {
        parent::boot();

        Bedrijf::deleting(function ($bedrijf) {
            $bedrijf->contacts()->delete();
        });
    }
    
}
