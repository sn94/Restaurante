{!!Form::label('name', 'Denominacion')!!}
{!!Form::text('name', null, ['class'=>'form-control'] ) !!}
{!!Form::label('address','Direccion')!!}
{!!Form::text('address', null, ['class'=>'form-control'])!!}
{!!Form::label('cellphone','Celular')!!}
{!!Form::text('cellphone', null, ['class'=>'form-control'])!!}
{!!Form::label('telephone', 'Telefono')!!}
{!!Form::text('telephone', null, ['class'=>'form-control'])!!}
{!!Form::submit('Guardar',  ['class'=>'btn btn-info' ] )!!}
