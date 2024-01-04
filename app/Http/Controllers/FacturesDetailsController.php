<?php

namespace App\Http\Controllers;

use App\facture;
use App\project;
use Illuminate\Http\Request;

class FacturesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::all();
        
        $facture = facture::with('project')->get();
        
        return view('factures.gerer',compact('facture','project'));
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
        
        
        // Create a new pack
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->id;
        facture::find($id)->delete();
        session()->flash('delete','you are delete it sucssesfuler');
        return redirect('/facture.gerer');
    }
}
