@extends('layouts.admin')
@section('breadcrumb_title', 'Editar datos de un producto')
@section('content')

 

@include('plantillas.success'  )
  


{!! Form::model( $producto,  ['route'=> [ 'producto.update', $producto->id ] ,  'method'=> 'PUT',  'files'=> true ]  ) !!}

    @include('productos.forms.producto') 

{!! Form::close() !!}


@endsection