<?php

namespace App\Http\Controllers;

use App\Models\Regularizacion;
use Illuminate\Http\Request;

class RegularizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regularizacions = Regularizacion::all();
        return view('regularizacion.cargar');
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
            $ruta = $request->solicitud->store('docs_regularizacion');

            //Crear registro en tabla archivos
            $regularizacion = new Regularizacion();
            $regularizacion->ruta = $ruta;
            $regularizacion->nombre = $request->solicitud->getClientOriginalName();
            $regularizacion->mime = $request->solicitud->getMimeType();
            $regularizacion->save();
        }

        if ($request->hasFile('recibo_pago') && $request->file('recibo_pago')->isValid()) {
            $ruta = $request->recibo_pago->store('docs_regularizacion');

            //Crear registro en tabla archivos
            $regularizacion = new Regularizacion();
            $regularizacion->ruta = $ruta;
            $regularizacion->nombre = $request->recibo_pago->getClientOriginalName();
            $regularizacion->mime = $request->recibo_pago->getMimeType();
            $regularizacion->save();
        }

        if ($request->hasFile('recibo_matricula') && $request->file('recibo_matricula')->isValid()) {
            $ruta = $request->recibo_matricula->store('docs_regularizacion');

            //Crear registro en tabla archivos
            $regularizacion = new Regularizacion();
            $regularizacion->ruta = $ruta;
            $regularizacion->nombre = $request->recibo_matricula->getClientOriginalName();
            $regularizacion->mime = $request->recibo_matricula->getMimeType();
            $regularizacion->save();
        }

        if ($request->hasFile('solicitud_matricula') && $request->file('solicitud_matricula')->isValid()) {
            $ruta = $request->solicitud_matricula->store('docs_regularizacion');

            //Crear registro en tabla archivos
            $regularizacion = new Regularizacion();
            $regularizacion->ruta = $ruta;
            $regularizacion->nombre = $request->solicitud_matricula->getClientOriginalName();
            $regularizacion->mime = $request->solicitud_matricula->getMimeType();
            $regularizacion->save();
        }

        if ($request->hasFile('solicitud_convalidacion') && $request->file('solicitud_convalidacion')->isValid()) {
            $ruta = $request->solicitud_convalidacion->store('docs_regularizacion');

            //Crear registro en tabla archivos
            $regularizacion = new Regularizacion();
            $regularizacion->ruta = $ruta;
            $regularizacion->nombre = $request->solicitud_convalidacion->getClientOriginalName();
            $regularizacion->mime = $request->solicitud_convalidacion->getMimeType();
            $regularizacion->save();
        }

        return redirect()->route('regularizacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regularizacion  $regularizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Regularizacion $regularizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regularizacion  $regularizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Regularizacion $regularizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regularizacion  $regularizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regularizacion $regularizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regularizacion  $regularizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regularizacion $regularizacion)
    {
        //
    }
}
