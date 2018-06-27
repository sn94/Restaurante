
@extends('layouts.admin')
@section('breadcrumb_title', 'Crear ciudades a partir de un json string')
@section('content')

@include('plantillas.success'  )



{!! Form::open( ['url'=> 'city/jsonstore'   ]  )!!}

{!! Form::label('state_id', 'Departamento') !!}
{!! Form::select('state_id', $states, null, ['class'=>'form-control' ])  !!}


 @include('towns.forms.edit')
{!! Form::close()!!}


@endsection 