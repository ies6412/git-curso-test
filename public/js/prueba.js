
  

         $('#formularioactor').submit(function(e){  
        e.preventDefault();
        var ruta=$('#formularioactor').data('route'); 
         $.ajax({
         type:"POST",
         data:$('#formularioactor').serialize(),
         url:$('#formularioactor').data('route'),
         contenType:false,
         cache:false,
         dataType:"json",
         success: function(respuesta){
                 
            alert(respuesta.Title)
                    
            $('#formularioactor')[0].reset();
            $('#exampleModal').modal('hide');
              location.reload();
               }
             
                  });
       
      
  });

  $(".btn-warning").click(function(){
   
   var identificador=$(this).attr("name");
   var ruta=$(this).data('route');
   
   $("#ModalShow").modal('show');
   $('#formularioactualizar')[0].reset();
   $.ajax({
            type:"GET",
            url: ruta,
            data:{identi:identificador},
            dataType:"json",
            success:function(respuesta){
                $("#NombreActorShow").val(respuesta.datos.NombreActor);
                $("#IdShow").val(respuesta.datos.id);

                
            }
      
    });

   });

 $('#formularioactualizar').submit(function(p){
    p.preventDefault();
    
    var ruta=$('#formularioactualizar').data('route') 
     $.ajax({
     type:"Post",
     data:$('#formularioactualizar').serialize(),
     url:ruta,
     dataType:"html",
     success:function(respuesta){
      $("#respuesta").append('<div class="alert alert-primary" role="alert">'+respuesta+'</div>')    
      setTimeout(function() {
        location.reload();
            },3000);
          },
      error:function(erro){
        $("#respuesta").append('<div class="alert alert-danger" role="alert">'+erro+'</div>')   

      }



    })
    

  })  ;


 $('.btn-danger').click(function(){
   if(confirm("Desea eliminar el dato"))
   { $.ajax({
    url:$(this).data('route'),
    data:{id:$(this).data('value'),_token:$(this).data('name')},
    type:"delete",
     dataType:"html",
     success:function(p){
      
      alert(p);
      location.reload()
  },
   error:function(){
   alert(e);
   }
  })
}
})

   
