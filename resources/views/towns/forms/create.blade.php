 
{!! Form::label('state_id', 'Departamento') !!}
{!! Form::select('state_id', $states, null, ['class'=>'form-control' ])  !!}




<table class='table table-bordered table-light' cellpadding="1">
    <thead>
        <tr>
            <th>
             {!! Form::label('name', 'Descripcion') !!} 
            </th>
            <th></th> 
        </tr>
    </thead>
    <tbody id="table-town">
        <tr>
            <td>{!! Form::text('name[]', null, ['class'=> 'form-control' ] )  !!} </td>
            <td> <a href="#" class="btn btn-danger" onclick="rem_input_row(this)"> <span class="fas fa-minus-circle"></span></a> 
                 </td>
        </tr>
    </tbody>
</table>
 <a href="#" class="btn btn-info" onclick="add_input_row()"> <span class="fas fa-plus-circle"></span></a>  
  <br>       

<br>
{!! Form::submit('Enviar', [ 'class'=> 'btn btn-info' ] ) !!}
<br>