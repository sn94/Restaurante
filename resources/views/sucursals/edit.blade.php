@extends('layouts.admin')
@section('breadcrumb_title','Editar datos de sucursal')
@section('content')
@include('plantillas.success')

{!! Form::model( $sucursal, ['route'=> ['sucursal.update',$sucursal->id] , 'method'=>'put' ] ) !!}
@include('sucursals.forms.sucursal')
{!! Form::close() !!}

{!!Form::open(['route'=> ['sucursal.update',$sucursal->id] , 'method'=>'delete'])!!}
{!! Form::submit('Borrar', ['class'=>'btn btn-danger'] )!!}
{!!Form::close()!!}

@endsection