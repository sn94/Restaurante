@extends('layouts.admin')
@section('breadcrumb_title', 'Crear un producto')
@section('content')

 

@include('plantillas.success'  )
  


{!! Form::open(  ['route'=>'producto.store' ,  'method'=> 'POST',  'files'=> true ]  ) !!}

    @include('productos.forms.producto') 

{!! Form::close() !!}


@endsection