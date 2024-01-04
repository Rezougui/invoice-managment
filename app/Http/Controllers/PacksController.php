<?php

namespace App\Http\Controllers;

use App\packs;
use App\service;
use Illuminate\Http\Request;

class PacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        
        $packs = packs::with('services')->get();
        
        return view('packs.create',compact('packs','services'));
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
            $packs_name = $request->input('packs_name');
            $service_ids = $request->input('service_ids');
            $packs_prix = $request->input('packs_prix');

            // Create a new pack
            $pack = new packs();
            $pack->packs_name = $packs_name;
            $pack->packs_prix = $packs_prix;
            $pack->save();

            // Iterate through the service IDs and associate them with the pack
            foreach ($service_ids as $service_id) {
                $pack->services()->attach($service_id);
                
            }

            // Redirect to the packs index page
            return redirect()->route('packs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\packs  $packs
     * @return \Illuminate\Http\Response
     */
    public function show(packs $packs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\packs  $packs
     * @return \Illuminate\Http\Response
     */
    public function edit(packs $packs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\packs  $packs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, packs $packs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\packs  $packs
     * @return \Illuminate\Http\Response
     */
    public function destroy(packs $packs)
    {
        //
    }
}
