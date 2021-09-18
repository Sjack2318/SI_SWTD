<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriculas = Matricula::all();
        return view('matricula.cargar');
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
        if ($request->hasFile('boucher') && $request->file('boucher')->isValid()) {
            $ruta = $request->boucher->store('docs_matricula');

            //Crear registro en tabla archivos
            $matricula = new Matricula();
            $matricula->ruta = $ruta;
            $matricula->nombre = $request->boucher->getClientOriginalName();
            $matricula->mime = $request->boucher->getMimeType();
            $matricula->save();
        }

        if ($request->hasFile('ficha') && $request->file('ficha')->isValid()) {
            $ruta = $request->ficha->store('docs_matricula');

            //Crear registro en tabla archivos
            $matricula = new Matricula();
            $matricula->ruta = $ruta;
            $matricula->nombre = $request->ficha->getClientOriginalName();
            $matricula->mime = $request->ficha->getMimeType();
            $matricula->save();
        }

        if ($request->hasFile('otro') && $request->file('otro')->isValid()) {
            $ruta = $request->otro->store('docs_matricula');

            //Crear registro en tabla archivos
            $matricula = new Matricula();
            $matricula->ruta = $ruta;
            $matricula->nombre = $request->otro->getClientOriginalName();
            $matricula->mime = $request->otro->getMimeType();
            $matricula->save();
        }

        return redirect()->route('matricula.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        //
    }
}
