@extends('layouts.admin')
@section('breadcrumb_title', 'Crear un Departamento')
@section('content')

 

@include('plantillas.success'  )
 




{!! Form::open(  ['route'=>'state.store' ,  'method'=> 'POST' ]  ) !!}

    @include('states.forms.state') 

{!! Form::close() !!}


@endsection