
// este ejemplo funciona
// $(document).ready(function() {
//     // $.noConflict();
//     $('#tabla').DataTable({
//         "ajax": {
//             url : BASE_URL+'usuarios/cargar',
//             type : 'GET'
//         },
//     });
// });


//otra forma de datable funcionando
$(document).ready(function() { 
    $('#tabla').DataTable({       
        "ajax": {
            url : BASE_URL+'usuarios/cargar',
            type : 'GET'
        },

    });
});











