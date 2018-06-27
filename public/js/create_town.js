 
 function add_input_row(   ){
   let btn= '<a href="#" class="btn btn-danger" onclick="rem_input_row(this)"> <span class="fas fa-minus-circle"></span></a>';
  let input=`<input type='text' name='name[]' class='form-control'`;
    $("#table-town").append("<tr><td>"+input+"</td><td>"+btn+"</td></tr>"); 
  
  }


 function rem_input_row(esto){
     let lon=$("#table-town").children("tr").length;
     if( lon >1)
     $( esto ).parent().parent().remove() ;  
 }