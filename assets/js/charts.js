$(document).ready(function() {
    // escondo el grafico
	// $("#graficoUsuarios").hide();
	
	// al hacer click en el boton muestro cada grafico
	$("#usuariosEsconder").click(function() {
		// cada vez que hago click muestra y oculta
		$("#graficoUsuarios").toggle();
	});	
	
});



// esto funciona
// $(document).ready(function() {
//     // escondo los graficos
//  $("#graficoUsuarios").hide();
//  $("#graficoFotografos").hide();
//  $("#graficoModelos").hide();
  
//  // al hacer click en el boton muestro cada grafico
//  $("#usuariosEsconder").click(function() {
//    // cada vez que hago click muestra y oculta
//    $("#graficoUsuarios").toggle();
//  });

//  $("#fotografosEsconder").click(function() {
    
//    $("#graficoFotografos").toggle();
//  });

//  $("#modelosEsconder").click(function() {
    
//    $("#graficoModelos").toggle();
//  });
  
// });


function grafico(result){



    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Stadistics', 'Totals'],
          ['Users', result.users.totalusuarios],
          ['Customers', result.customers.totalcustomers],
          ['Projects', result.projects.totalprojects]         
        ]);

        var options = {
          chart: {
            title: 'Beta Project 1.0',
            subtitle: 'Stadistics',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('graficoUsuarios'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }



}


// por alguna razon no puedo cargar 2 ajax en un mismo sitio 
// como en un chart
$.ajax({
	url: BASE_URL+'dashboard/totalesgrafico',
	type: 'GET',
	dataType: 'json'	
})
.done(function(result) {  

  // console.log(result);   
	grafico(result);

  // el json_encode lo que trae como resultados son objetos
  // console.log(result); 
  // de esta forma acceso a un array que traigo por json_encode
  // console.log(result.users);
  // con typeof savemos el tipo de la variable
  // console.log(typeof result);	

});











