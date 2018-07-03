{!! Form::select('category_id', $categories, old('category_id'), [ 'class'=>'form-control' ])  !!}
<br>
{!! Form::label('name', 'Descripcion') !!}
{!! Form::text('name', null, ['class'=>'form-control'] )  !!}
<br>
{!! Form::submit('Enviar' ,  ['class'=>'btn btn-primary' ]  ) !!}