
function cargar_fila( reg){
 let img= `<img src='${reg.foto}' width='200' height='200'>`;
 let edit_link= `<a href='/producto/${reg.id}/edit' class='btn btn-primary fas fa-edit' />`;
 let fila= `<tr> <td>${ img}</td> <td>${reg.name}</td> <td>${ reg.price}</td> <td>${ edit_link }</td> </tr>`;
 $('#body-productos').append( fila);    
}

function cargar_tabla( todo ){
    $('#body-productos').empty();
    todo.forEach( cargar_fila );
}

function obtener_lista( cat_id ){
    
    let ruta= "/productos/"+cat_id.target.value;
    
    $.ajax(
            {
                url: ruta,
                success: function( data ){
                    cargar_tabla( data);
                }
            });
}




$('#category_id').change(  obtener_lista  );