@extends('layouts.admin')
@section('breadcrumb_title', 'Crear una sucursal')
@section('content')


@include('plantillas.success')

{!!Form::open([ 'route'=> 'sucursal.store', 'method'=>'POST' ]) !!}
@include('sucursals.forms.sucursal')
{!!Form::close()!!}
@endsection