

// este ejemplo de crear tabla funciona,pero con datable no funciona
// el each vendria siendo como un foreach en php

 // $.getJSON(BASE_URL + 'usuarios/cargar', function(result){ 	
 //            $.each(result, function(index, val){
 //                $("#data").append('<tr><td>' + val.id + '</td><td>'+
 //                	'<img src="'+ BASE_URL +'uploads/files/'+ val.ruta +'" class="img-responsive img-circle" />'
 //                 + '</td><td>'	
 //                 + val.nombre + '</td><td>'
 //                 + val.apellido + '</td><td>'
 //                  + val.email + '</td><td>'
 //                   + val.role + '</td><td>'
 //                   +'<a  id="ver" href="usuarios/ver/'+val.id+'"  ><span class="btn-primary btn-xs glyphicon glyphicon-zoom-in" data-toggle="ver" title="Ver"></span></a>'
 //                   +'<a  id="editar" href="usuarios/editar/'+val.id+'" ><span class="btn-success btn-xs glyphicon glyphicon-pencil" data-toggle="editar" title="Editar"></span></a>'
 //                   +'<a id="eliminar" href="usuarios/eliminar/'+val.id+'"   ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="eliminar" title="Eliminar"></span></a></td>'
 //                   +'</tr>');
             

 //            });//fin each            


 // 		// console.log(result);
 //          });





 // $('#eliminar').click(function(event) { 

 //     $('#eliminar').attr('href', 'value');            

 //                    var confirmar;
                    
 //                    confirmar=confirm("Estas seguro de eliminar este registro?");

 //                    if (confirmar) {
 //                       // window.location=BASE_URL+'usuarios/eliminar/'+val.id;
 //                       return true;
 //                    } else {
 //                        // window.location=BASE_URL+'usuarios';
 //                        return false;
 //                    }
                    
 //                  });






/*****************************/
// aqui obtengo datos {nombre:"jose"} estos son parametros opcionales
// que envio o recibo
 // $.get('usuarios/ver',{id:'id'} function(data) {
 // 	console.log(data);
 // });

 //  $.post('usuarios/eliminar',{id:'id'} function(data) {
 // 	console.log(data);
 // });



/*****************************/
// ejemplo de get funcionando
// $('#prueba').click(function() {
// 	  $.get(BASE_URL + 'usuarios/prueba',{nombre:'jonathan'}, function(data) {
//  	console.log(data);
//  });

// });




/*****************************/
// ejemplo de post funcionando
// $('#prueba').click(function() {
// 	  $.post(BASE_URL + 'usuarios/pruebados',{nombre:'ramon'}, function(data) {
//  	console.log(data);
//  });

// });




/*****************************/
// otra prueba
// $('#prueba').click(function() {
// 	  $.getJSON(BASE_URL + 'usuarios/ver', function(data) {
//  	console.log(data);
//  });

// });



/*****************************/
    // function algo(){
    //             var confirmar;
                    
    //                 confirmar=confirm("Estas seguro de eliminar este registro?");

    //                 if (confirmar) {
    //                    window.location=BASE_URL+'usuarios/eliminar/'+val.id;
    //                 } else {
    //                     window.location=BASE_URL+'usuarios';
    //                 }

    //          }


// agregar users
$('#agregar').click(function(event) {
	window.location=BASE_URL+'usuarios/agregar';
});

// pdf users
$('#pdf').click(function(event) {
	window.location=BASE_URL+'usuarios/reporteUPdf';
	
});

// excel users
$('#excel').click(function(event) {
	window.location=BASE_URL+'usuarios/reporteUExcel';
});




// regresar a usuarios
$('#regresarUsuarios').click(function(event) {
	window.location=BASE_URL+'usuarios';
});




 // $('#eliminar').click(function(event){
 //        event.preventDefault();

 //         var confirmar;
  
 //  confirmar=confirm("Estas seguro de eliminar este registro?");

 //  if (confirmar) {
 //     window.location=BASE_URL+'usuarios/eliminar';
 //  } else {
 //      window.location=BASE_URL+'usuarios';
 //  }
 //    });



/*****************************/
// eliminar usuarios
// $('#eliminar').click(function(event) {
//   confirm("Estas seguro de eliminar este registro?");
//   window.location=BASE_URL+'usuarios';
// });




/*****************************/
 // $.getJSON(BASE_URL + 'usuarios/cargar', function(result){  
 //            $.each(result, function(index, val){
 //                $("#data").append('<tr><td>' + val.id + '</td><td>'+
 //                  '<img src="'+ BASE_URL +'uploads/files/'+ val.ruta +'" class="img-responsive img-circle" />'
 //                 + '</td><td>'  
 //                 + val.nombre + '</td><td>'
 //                 + val.apellido + '</td><td>'
 //                  + val.email + '</td><td>'
 //                   + val.role + '</td><td>'
 //                   +'<a  id="ver" href="usuarios/ver/'+val.id+'"  ><span class="btn-primary btn-xs glyphicon glyphicon-zoom-in" data-toggle="ver" title="Ver"></span></a>'
 //                   +'<a  id="editar" href="usuarios/editar/'+val.id+'" ><span class="btn-success btn-xs glyphicon glyphicon-pencil" data-toggle="editar" title="Editar"></span></a>'
 //                   +'<a id="eliminar" href="usuarios/eliminar/'+val.id+'"   ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="eliminar" title="Eliminar"></span></a></td>'
 //                   +'</tr>');
 //            });
            
 //    // console.log(result);
 //          });


/*****************************/
// perfecto ejemplo funcionando,primero nos referimos a la posicion [0]
// en el array y accedemos al nombre
// $.ajax({
//   url: BASE_URL+'usuarios/prueba',
//   type: 'GET',
//   dataType: 'json',
//   data: {nombre: 'nombre'}
// })
// .done(function(result) {
//   console.log(result[0].nombre);

// });




/*****************************/
// otro ejemplo funcionando
// $.ajax({
//   url: BASE_URL+'usuarios/prueba',
//   type: 'GET',
//   dataType: 'json' 
// })
// .done(function(result) {
//   console.log(result[0].nombre);
//   console.log(result);

//   $('#prueba').click(function(event) {
//   var confirmar;
  
//   confirmar=confirm("Estas seguro de eliminar este registro?");

//   if (confirmar) {
//      window.location=BASE_URL+'usuarios/eliminar';
//   } else {
//       window.location=BASE_URL+'usuarios';
//   }
  
// });


// });



/*****************************/
// ejemplo funcionando
 // $('#prueba').mouseenter(function(event) {
 //    $('#prueba').attr('href', 'aalgo');  

 // });

/*****************************/
// por alguna razon no funciona con data asincronica,
// osea modificar tabla cargada
 //  $('#eliminar').mouseenter(function(event) {
 //    $('#eliminar').attr('href', 'aalgo');  

 // });

/*****************************/
// en este ejemplo me funciono, tal vez por devolver
// en modelo row(), entonces acedi con .totalusuarios
// $.ajax({
//     url: BASE_URL+'dashboard/prueba',   
//     dataType: 'json'    
// })
// .done(function(result) {
//     // con esta forma accedo a los row(),row_array()
//     // console.log(result.nombre);

//     // con esta forma accedo a result(),result_array(),result_object()
//     console.log(result[0].nombre);
// });






$.ajax({
    url: BASE_URL+'dashboard/totalusers',   
    dataType: 'json'    
})
.done(function(result) {    
     // $('#totalusuarios').html('<p>'+result.totalusuarios+'</p>');
     $('#totalusers').html(result.totalusuarios);
});


$.ajax({
    url: BASE_URL+'dashboard/totalcustomers',   
    dataType: 'json'    
})
.done(function(result) {      
     $('#totalcustomers').html(result.totalcustomers);
});


$.ajax({
    url: BASE_URL+'dashboard/totalprojects',   
    dataType: 'json'    
})
.done(function(result) {      
     $('#totalprojects').html(result.totalprojects);
});



$.ajax({
    url: BASE_URL+'usuarios/imgperfil',   
    dataType: 'json'    
})
.done(function(result) {         
     $('#imgperfil').html('<img src=" '+BASE_URL+'uploads/thumbnails/'+result.ruta+
      ' " class="img-responsive img-circle" />' );
});






// cargar estados combo
$.ajax({
    url: BASE_URL+'register/cargarestados',   
    dataType: 'json'    
})
.done(function(result) { 
  
      $.each(result, function(index, val) {
         $("#estado").append('<option>'+val.estado+'</option>') 
      });
});



// cargar capitales combo
$.ajax({
    url: BASE_URL+'register/cargarcapitales',   
    dataType: 'json'    
})
.done(function(result) { 
  
      $.each(result, function(index, val) {
         $("#capital").append('<option>'+val.capital+'</option>') 
      });
});


// cargar roles
$.ajax({
    url: BASE_URL+'register/cargarroles',   
    dataType: 'json'    
})
.done(function(result) { 
  
      $.each(result, function(index, val) {
         $("#role").append('<option>'+val.role+'</option>') 
      });
});



// cuando estado seleccionado cambia,,la opcion seleccionada,
// se abre un each, el valor de estado se guarda en una variable
// llamda miestado,luego la paso por post la variable o parametro  al controlador
// register/combo y los resultados del controlador osea lo que trajo
// del modelo y la opcion se agrega en capital

  $("#estado").change(function () {
           $("#estado option:selected").each(function () {
            miestado=$('#estado').val();
            $.post(BASE_URL+'register/combo',
             {miestado: miestado}, function(result){
            $("#capital").html(result);
            });            
        });
   })



