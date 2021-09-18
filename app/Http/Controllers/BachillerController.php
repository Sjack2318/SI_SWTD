<?php

namespace App\Http\Controllers;

use App\Models\Bachiller;
use Illuminate\Http\Request;

class BachillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bachillers = Bachiller::all();
        return view('bachiller.cargar', compact('bachillers'));
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
            $ruta = $request->formato->store('docs_bachiller');

            //Crear registro en tabla archivos
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->formato->getClientOriginalName();
            $bachiller->mime = $request->formato->getMimeType();
            $bachiller->save();
        }

        if ($request->hasFile('recibo') && $request->file('recibo')->isValid()) {
            $ruta = $request->recibo->store('docs_bachiller');

            //Crear registro en tabla archivos
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->recibo->getClientOriginalName();
            $bachiller->mime = $request->recibo->getMimeType();
            $bachiller->save();
        }

        if ($request->hasFile('cert_estudios') && $request->file('cert_estudios')->isValid()) {
            $ruta = $request->cert_estudios->store('docs_bachiller');

            //Crear registro en tabla archivos
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->cert_estudios->getClientOriginalName();
            $bachiller->mime = $request->cert_estudios->getMimeType();
            $bachiller->save();
        }

        if ($request->hasFile('cert_no_adeudo') && $request->file('cert_no_adeudo')->isValid()) {
            $ruta = $request->cert_no_adeudo->store('docs_bachiller');

            //Crear registro en tabla archivos
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->cert_no_adeudo->getClientOriginalName();
            $bachiller->mime = $request->cert_no_adeudo->getMimeType();
            $bachiller->save();
        }

        if ($request->hasFile('copia_bachiller') && $request->file('copia_bachiller')->isValid()) {
            $ruta = $request->copia_bachiller->store('docs_bachiller');

            //Crear registro en tabla archivos
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->copia_bachiller->getClientOriginalName();
            $bachiller->mime = $request->copia_bachiller->getMimeType();
            $bachiller->save();
        }

        if ($request->hasFile('copia_titulo') && $request->file('copia_titulo')->isValid()) {
            $ruta = $request->copia_titulo->store('docs_bachiller');

            //Crear registro en tabla archivosformato
            $bachiller = new Bachiller();
            $bachiller->ruta = $ruta;
            $bachiller->nombre = $request->copia_titulo->getClientOriginalName();
            $bachiller->mime = $request->copia_titulo->getMimeType();
            $bachiller->save();
        }

        return redirect()->route('bachiller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bachiller  $bachiller
     * @return \Illuminate\Http\Response
     */
    public function show(Bachiller $bachiller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bachiller  $bachiller
     * @return \Illuminate\Http\Response
     */
    public function edit(Bachiller $bachiller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bachiller  $bachiller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bachiller $bachiller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bachiller  $bachiller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bachiller $bachiller)
    {
        //
    }
}
