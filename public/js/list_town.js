 function  list_towns( id= ""){
            var depart_id= (id !=="")? id: $("#departamento").val();
var ruta="/cities/"+ depart_id;

$.ajax({
    url:  ruta,
    method: "get",
    success: function( data ){
         
         $("#ciudades").empty();
         data.forEach( function(ele){
             let btn= "<a class='btn btn-info fas fa-edit' href='/town/'"+ele.id+"/edit' ></a>";
              let fila= `<tr> <td>${ele.name}</td>   <td>${btn}</td></tr>`;
            $("#ciudades").append(fila); 
         }); 
        } 
});
         }
         
         

$(document).ready(  
        function(){  
            
            $("#departamento").on( 'change', function( evt){
                        
               let id= evt.target.value;
                list_towns(   );
            });
        }
        );