<?php

namespace App\Http\Controllers;

use App\Demande;
use App\Dossiers;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function save($id){
       
        $demande = new Demande;
        $demande->id_dossier = $id;
        $demande->status = "EN COURS DE TRAITEMENT";
        $demande->save();

         return redirect('/demandes_s');
    }

    public function cancelDemande($id){
        $demande = Demande::find($id);
        $demande->status = "DEMANDE ANNULEE";
        $demande->save();

        return redirect('/demandes_s');
    }

    public function deleteDemande($id){
        $demande = Demande::find($id);
        $demande->status = "DEMANDE SUPPRIMEE";
        $demande->save();

        return redirect('/demandes_s');
    }

     public function serviDemande($id){
        $demande = Demande::find($id);
        $demande->status = "DEMANDE SERVIE";
        $demande->save();

        return redirect('/demandes_f');
    }

    public function rejDemande($id){
        $demande = Demande::find($id);
        $demande->status = "DEMANDE REJETEE";
        $demande->save();

        return redirect('/demandes_f');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


     public function getDemandeSite()
    {
        $demandes = Demande::all();

       $dossiers = Dossiers::all();

        return view('show_demande_site', ['demandes' =>  $demandes,'dossiers'=> $dossiers]);
    }

     public function getDemandeF()
    {
        $demandes = Demande::all();

       $dossiers = Dossiers::all();

        return view('show_demande_f', ['demandes' =>  $demandes,'dossiers'=> $dossiers]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        //
    }
}
