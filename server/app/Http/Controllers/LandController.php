<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Land::orderBy('created_at', 'DESC')->get();
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
        $datas = json_decode($request->getContent());
        $land = new Land();

        $land->Comune = $datas->Comune;
        $land->Immagine = $datas->Immagine;
        $land->Dimensione = $datas->Dimensione;
        $land->FoglioCatastale = $datas->FoglioCatastale;
        $land->MappaleCatastale = $datas->MappaleCatastale;
        $land->ParcellaCatastale = $datas->ParcellaCatastale;
        $land->Tipologia = $datas->Tipologia;
        $land->Irrigazione = $datas->Irrigazione;
        $land->Offerta = $datas->Offerta;
        $land->Canone = $datas->Canone;
        $land->Disponibilità = $datas->Disponibilità;

        $land->save();
        return response()->json($land, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Land::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = json_decode($request->getContent());
        $land = Land::where('id', $id)->first();

        $land->Comune = $datas->Comune;
        $land->Immagine = $datas->Immagine;
        $land->Dimensione = $datas->Dimensione;
        $land->FoglioCatastale = $datas->FoglioCatastale;
        $land->MappaleCatastale = $datas->MappaleCatastale;
        $land->ParcellaCatastale = $datas->ParcellaCatastale;
        $land->Tipologia = $datas->Tipologia;
        $land->Irrigazione = $datas->Irrigazione;
        $land->Offerta = $datas->Offerta;
        $land->Canone = $datas->Canone;
        $land->Disponibilità = $datas->Disponibilità;

        $land->save();
        return response()->json($land, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Land::destroy('id', $id);
    }
}
