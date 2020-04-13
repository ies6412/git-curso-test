@extends('welcome')
@section('seccion')
<form method="POST" action="{{route('deporte.edit',$respuesta->id)}}" >
@method('PUT')
{{csrf_field()}}
<div>
      <label>Ingrese el deporte </label>
      <input type="hidden" name="id_dep" value="{{$respuesta->id}}">
      <input type="text" name="nombredeportea" id="nombredeportea" value="{{$respuesta->nombre_deporte}}">
      <input type="submit" value="Aceptar" class="btn btn-primary">
   </div>

</form>

@endsection