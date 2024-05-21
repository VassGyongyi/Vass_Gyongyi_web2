<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use App\Http\Requests\StoreSzavakRequest;
use App\Http\Requests\UpdateSzavakRequest;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tabla = response()->json((Szavak::class('szavaks')));
       return $tabla;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSzavakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSzavakRequest $request, Szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Szavak $szavak)
    {
        //
    }
public function szavakList(){
    $szavakList=Szavak::select("SELECT temas.temanev, szavaks.id, szavaks.angol, szavaks.magyar, szavaks.temaId FROM szavaks
    join temas on szavaks.temaId =temas.id");
return $szavakList;
}
}
