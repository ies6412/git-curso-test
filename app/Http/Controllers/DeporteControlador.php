<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deportes;
class DeporteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $deportes=deportes::all();
        return view('Deporte.deporte',compact('deportes'));

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
        $deporte=new deportes;
        $deporte->nombre_deporte=$request->nombredeporte;
        $deporte->save();
        return redirect("Deporte/deporte")->with('msg','Deporte Agragado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $respuesta=deportes::findOrfail($id);
        return view('Deporte.actualizar',compact('respuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request,$id)
    {
        $datos=deportes::findOrfail($id);
        $datos->nombre_deporte=$request->nombredeportea;
        $datos->save();
        return redirect("Deporte/deporte");
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
    public function destroy($id)
    {
       
      $evento=deportes::findOrfail($id);
      $evento->delete();
      return redirect('Deporte/deporte')->with('mesagge','Deporte Eliminado');

    
    }
}
