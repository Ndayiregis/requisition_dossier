<?php

namespace App\Http\Controllers;

use App\Dossiers;
use Illuminate\Http\Request;

class DossiersController extends Controller
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

    public function getDossiers()
    {
        $dossiers = Dossiers::all();

        return view('show')->with('dossiers', $dossiers);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dossiers  $dossiers
     * @return \Illuminate\Http\Response
     */
    public function show(Dossiers $dossiers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dossiers  $dossiers
     * @return \Illuminate\Http\Response
     */
    public function edit(Dossiers $dossiers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dossiers  $dossiers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dossiers $dossiers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dossiers  $dossiers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dossiers $dossiers)
    {
        //
    }
}
