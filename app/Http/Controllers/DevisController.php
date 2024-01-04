<?php

namespace App\Http\Controllers;

use App\devis;
use App\project;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::all();
        
        $devis = devis::with('project')->get();
        
        return view('devis.create',compact('devis','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get the form data
        $numero = $request->input('number_devis');
        $date = $request->input('date_devis');
        $idprojet = $request->input('project_id');
        $tva = $request->input('tvaValue');
        
        // Create a new pack
        $devis = new devis();
        $devis->date = $date;
        $devis->idprojet = $idprojet;
        $devis->numero = $numero;
        $devis->tva = $tva;

        $devis->save();

        // Iterate through the service IDs and associate them with the pack
       

        // Redirect to the packs index page
        return redirect()->route('devis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function show(devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function edit(devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, devis $devis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function destroy(devis $devis)
    {
        //
    }
}
