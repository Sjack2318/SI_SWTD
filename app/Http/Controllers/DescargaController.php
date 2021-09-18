<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DescargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descargas = Descarga::all();
        return view('descarga.index', compact('descargas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('descarga') && $request->file('descarga')->isValid()) {
            $ruta = $request->descarga->store('docs_descarga');

            //Crear registro en tabla archivos
            $descarga = new Descarga();
            $descarga->ruta = $ruta;
            $descarga->nombre = $request->descarga->getClientOriginalName();
            $descarga->mime = $request->descarga->getMimeType();
            $descarga->save();
        }

        return redirect()->route('descarga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function download(Descarga $descarga)
    {
        return Storage::download($descarga->ruta, $descarga->nombre, ['Content-Type' => $descarga->mime]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Descarga $descarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descarga $descarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descarga $descarga)
    {
        //
    }
}
