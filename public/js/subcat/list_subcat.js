function limpiar(){
    $('#body-subcat').empty();
}


function add_row(elemento){
    let btn= "<a href='/subcategory/"+ elemento.id +"/edit' class='btn btn-info fas fa-edit' >";
    let fila= "<tr><td>"+elemento.name+"</td> <td>"+btn+"</td></tr>";
    $('#body-subcat').append( fila );
}


function cargar_tabla( data ){
     limpiar();
                   data.forEach( function(elemento){
                        add_row( elemento);
                   }); 
}


function list_subcategories( cat){
    
   $.ajax(
           {
               url: "/subcategories/"+ cat,
               success:  cargar_tabla
           }
            ); 
    
    
}

$( document).ready(  function(){
    
    
/*
 * Evento 1
 */
$("#category_id").change(  function(event){
    
    let cat_id=  event.target.value;
    list_subcategories(  cat_id);
    
      
});




});