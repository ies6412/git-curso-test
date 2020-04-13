@extends('welcome')
@section('seccion')
  <h1>SIn AJAX</h1>
  <h1>Nuevo Deporte</h1>
  <form method="POST" action="{{route('deporte.store')}}" > 
  {{csrf_field()}}
    <div>
      <label>Ingrese el deporte </label>
      <input type="text" name="nombredeporte" id="nombredeporte">
      <input type="submit" value="Aceptar" class="btn btn-primary">
   </div>
  </form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  <?php $i=0;?>
  @foreach($deportes as $deporte)

    <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$deporte->id}}</td>
      <td><a href="{{route('deporte.show',$deporte->id)}}" name="{{$deporte->id}}" title="sin ajax" >{{$deporte->nombre_deporte}}</a></td>
      <td><a href="" class="btn btn-warning">Actualizar</a></td>
      <td>
      <form action="{{route('deporte.destroy',$deporte->id)}}" method="POST">
      {{csrf_field()}}
      @method('delete')
      <input type="submit" value="Eliminar">
      </form>
      </td>
    </tr>
    
@endforeach
  </tbody>
</table>



@endsection