<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Resources\ContactoResource;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ContactoResource::collection(Contacto::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$solicitud_contacto = new Contacto;
        //$solicitud_contacto->primer_nombre = $request->primer_nombre;
        //$solicitud_contacto->primer_apellido = $request->primer_apellido;
        //$solicitud_contacto->correo_electronico = $request->correo_electronico;
        //$solicitud_contacto->asunto = $request->asunto;
        //$solicitud_contacto->mensaje = $request->mensaje;
        //$solicitud_contacto->save();
        return new ContactoResource(Contacto::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($id)
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
        //







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contacto_id)
    {


        //
        $contacto = Contacto::find($contacto_id);
        $contacto->delete();
        return new ContactoResource($contacto);
    }
}
