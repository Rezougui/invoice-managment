<?php

namespace App\Http\Controllers;

use App\project;
use App\service;
use App\packs;
use App\client;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        $clients= client:: all();
        $packs=packs::all();
        
        $project = project::with(['services','packs','client'])->get();

        return view('projets.create',compact('services','clients','packs','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        
        $dailai = $request->input('dailai');
        $jour = $request->has('jour');
        $mois = $request->has('mois');
        $client_id = $request->input('client_id');
        $objective = $request->input('objective');
        $description = $request->input('description');
        $montant = $request->input('montant');

        $project->objective = $objective;
        $project->description = $description;
        $project->dailai = $dailai;
        $project->jour = $jour;
        $project->mois = $mois;
        $project->client_id = $client_id;
        $project->montant = $montant;

        $project->save();
        
    
        // Attach packs and quantities to the project
            // Attach packs and quantities to the project
        $packs = $request->input('packs', []);
        $quantities = $request->input('quantities', []);

        foreach ($packs as $index => $packId) {
            $quantity = $quantities[$packId] ?? 0;

            // Attach pack to project with quantity
            $project->packs()->attach($packId, ['quantity' => $quantity]);
        }

        return redirect('/projets');
    



    }    

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}
