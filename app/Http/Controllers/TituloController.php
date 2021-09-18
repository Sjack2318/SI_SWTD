<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulos = Titulo::all();
        return view('titulo.cargar');
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
        if ($request->hasFile('formato') && $request->file('formato')->isValid()) {
            $ruta = $request->formato->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->formato->getClientOriginalName();
            $titulo->mime = $request->formato->getMimeType();
            $titulo->save();
        }

        if ($request->hasFile('recibo_carpeta') && $request->file('recibo_carpeta')->isValid()) {
            $ruta = $request->recibo_carpeta->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->recibo_carpeta->getClientOriginalName();
            $titulo->mime = $request->recibo_carpeta->getMimeType();
            $titulo->save();
        }

        if ($request->hasFile('constancia_no_adeudo') && $request->file('constancia_no_adeudo')->isValid()) {
            $ruta = $request->constancia_no_adeudo->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->constancia_no_adeudo->getClientOriginalName();
            $titulo->mime = $request->constancia_no_adeudo->getMimeType();
            $titulo->save();
        }

        if ($request->hasFile('copia_bachiller') && $request->file('copia_bachiller')->isValid()) {
            $ruta = $request->copia_bachiller->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->copia_bachiller->getClientOriginalName();
            $titulo->mime = $request->copia_bachiller->getMimeType();
            $titulo->save();
        }

        if ($request->hasFile('registro_practicas') && $request->file('registro_practicas')->isValid()) {
            $ruta = $request->registro_practicas->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->registro_practicas->getClientOriginalName();
            $titulo->mime = $request->registro_practicas->getMimeType();
            $titulo->save();
        }

        if ($request->hasFile('copia_dni') && $request->file('copia_dni')->isValid()) {
            $ruta = $request->copia_dni->store('docs_titulo');

            //Crear registro en tabla archivos
            $titulo = new Titulo();
            $titulo->ruta = $ruta;
            $titulo->nombre = $request->copia_dni->getClientOriginalName();
            $titulo->mime = $request->copia_dni->getMimeType();
            $titulo->save();
        }

        return redirect()->route('titulo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show(Titulo $titulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Titulo $titulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulo $titulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulo $titulo)
    {
        //
    }
}
