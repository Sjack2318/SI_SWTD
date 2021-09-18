<?php

namespace App\Http\Controllers;

use App\Models\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teses = Tesis::all();
        return view('tesis.cargar');
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
        if ($request->hasFile('solicitud') && $request->file('solicitud')->isValid()) {
            $ruta = $request->solicitud->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->solicitud->getClientOriginalName();
            $tesis->mime = $request->solicitud->getMimeType();
            $tesis->save();
        }

        if ($request->hasFile('boucher') && $request->file('boucher')->isValid()) {
            $ruta = $request->boucher->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->boucher->getClientOriginalName();
            $tesis->mime = $request->boucher->getMimeType();
            $tesis->save();
        }

        if ($request->hasFile('constancia_asesor') && $request->file('constancia_asesor')->isValid()) {
            $ruta = $request->constancia_asesor->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->constancia_asesor->getClientOriginalName();
            $tesis->mime = $request->constancia_asesor->getMimeType();
            $tesis->save();
        }

        if ($request->hasFile('constancia_no_adeudo') && $request->file('constancia_no_adeudo')->isValid()) {
            $ruta = $request->constancia_no_adeudo->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->constancia_no_adeudo->getClientOriginalName();
            $tesis->mime = $request->constancia_no_adeudo->getMimeType();
            $tesis->save();
        }

        if ($request->hasFile('ejemplar') && $request->file('ejemplar')->isValid()) {
            $ruta = $request->ejemplar->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->ejemplar->getClientOriginalName();
            $tesis->mime = $request->ejemplar->getMimeType();
            $tesis->save();
        }

        if ($request->hasFile('copia_bachiller') && $request->file('copia_bachiller')->isValid()) {
            $ruta = $request->copia_bachiller->store('docs_tesis');

            //Crear registro en tabla archivos
            $tesis = new Tesis();
            $tesis->ruta = $ruta;
            $tesis->nombre = $request->copia_bachiller->getClientOriginalName();
            $tesis->mime = $request->copia_bachiller->getMimeType();
            $tesis->save();
        }

        return redirect()->route('tesis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function show(Tesis $tesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Tesis $tesis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tesis $tesis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tesis $tesis)
    {
        //
    }
}
