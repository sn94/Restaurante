
{!! Form::label('name', 'Nombre') !!}
{!! Form::text('name', null, ['class'=> 'form-control'   ] ) !!}


{!! Form::label('detail', 'Descripcion') !!}
{!! Form::textarea('detail', '' , ['class'=> 'form-control' , 'rows'=>'3'  ] ) !!}

{!! Form::label('price', 'Precio') !!}
{!! Form::text('price', null, ['class'=> 'form-control'   ] ) !!}

{!! Form::label('category_id', 'Categoria') !!}
{!! Form::select('category_id', $categories, null, ['class'=> 'form-control'   ] ) !!}

{!!Form::file('foto', [ 'class'=> 'form-control']  ) !!}
{!! Form::submit('Guardar', [  'class'=> 'btn btn-info mt-2' ] ) !!}
