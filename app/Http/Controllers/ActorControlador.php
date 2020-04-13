<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actors;
class ActorControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors=actors::paginate(8);
        return view('Actor.actor',compact('actors'));
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
       $actor=new actors();
       $actor->NombreActor=$request->NombreActor;
       $actor->save();
       return response()->json(["Title"=>"Listo"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $datos=actors::findOrfail($id);
      return response()->json(compact('datos'));  
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param   \App\actors $simple_data
     
     */
    public function update(Request $request)
     {
        
        
        try { 
           
            $actoractuali=actors::findOrfail($request->get('IdShow'));
        
        $actoractuali->NombreActor=$request->get('NombreActorShow');
        $actoractuali->update();
        $respuesta="se han Guardado los datos";
        return $respuesta;
          } catch(\Illuminate\Database\QueryException $ex){ 
            $respuesta="No se pudo actualizar";
              return $respuesta; 
          }
        
        

       
         
         //$datosactualizar=array('NombreActor'=>$request->get('NombreActorShow'));
         //actors::where('id',$request->get('IdShow'))->update($datosactualizar);
         //dd($request->get('IdShow'));
          //dd($actoriactuali);
          //return view($request->NombreActorShow);//response()->json("ds");
           }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
        $actor=actors::findOrfail($id);
        $actor->delete();
        $respuesta="Dato borrado";
        return($respuesta);
    }   catch(\Illuminate\Database\QueryException $ex){ 
        $respuesta="No se pudo borrar";
          return ($respuesta);
      }
 


    }

    
}


