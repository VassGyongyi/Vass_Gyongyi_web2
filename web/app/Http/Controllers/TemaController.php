<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabla = response()->json((Tema::all()));
        return $tabla;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tema $tema)
    {
        //
    }
}
