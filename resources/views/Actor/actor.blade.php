@extends('welcome')
@section('seccion')
<h1>Nuevos actores</h1>
<button name="nuevoactor" data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Nuevo Actor</button>
  <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Actor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form method="POST" data-route="{{route('actor.store')}}" name="formularioactor" id="formularioactor">
             {{csrf_field()}}
         <div class="form-group">
          <label for="formGroupExampleInput">Nombre de Actor</label>
          <input type="text" class="form-control" name="NombreActor" id="NombreActor" placeholder="Nombre de Nuevo Actor">
          </div>
          <input type="submit" class="btn btn-primary" value="Save changes"/>
          @if(!session('Title'))
          <h1>{{session('Title')}}</h1>
          @endif
            
          </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
   
   <div>
   <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo Actor</th>
      <th scope="col">Nombre de Actor</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php
    $i=0;
    ?>

    @foreach($actors as $actor)
     <tr >
      <th>{{++$i}}</th>
      <td>{{$actor->id}}</td>
      <td>{{$actor->NombreActor}}</td>
      <td><a  class="btn btn-warning" id="{{$actor->id}}" data-route="{{route('actor.show',$actor->id)}} " name="{{$actor->id}}"> Actualizar</a></td>
      <td><a class="btn btn-danger"   id="eliminar" data-route="{{route('actor.destroy',$actor->id)}}" data-value="{{$actor->id}}" data-name="{{ csrf_token() }}" > Eliminar</a> 
     
      
          
      
      </td>
     </tr>
    @endforeach

      </tbody>
      
</table>
{{$actors->links()}}    
    </div>
    <!-- Para el modal de Actualziar-->

    <div class="modal fade" id="ModalShow" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Actualizar Actor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
        <div class="modal-body">
             
             <form method="POST"  data-route="{{route('actor.update')}}" id="formularioactualizar"> 
              {{csrf_field()}}
                <div class="form-group">
               <label for="formGroupExampleInput">Nombre de Actor</label>
               <input type="text" class="form-control" name="NombreActorShow" id="NombreActorShow" placeholder="Nombre de Nuevo Actor">
               </div>
               <input type="hidden" name="IdShow" id="IdShow">
               <input type="hidden" name="_method" value="PUT">
               
              <input type="submit" class="btn btn-primary" value="Actualizar"/>
              <div id="respuesta"></div> 
          </form>


         </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
           </div>
    </div>




  </div>
</div>
   



@endsection