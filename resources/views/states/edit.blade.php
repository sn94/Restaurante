@extends('layouts.admin')
@section('breadcrumb_title', 'Departamento-Editar')
@section('content')

 
 

{!!  Form::model( $state,  ['route'=>  ['state.update',   $state->id ] ,  'method'=>'PUT' ]     ) !!}
 @include('states.forms.state')  
{!!  Form::close()  !!}
   
 


{!! Form::open( ['route'=> ['state.destroy', $state->id] , 'method'=>'DELETE'   ]   ) !!}
{!!  Form::submit('Borrar', ['class'=> 'btn btn-danger']  ) !!}
{!!   Form::close() !!}

<br>
{!! Form::open( ['route'=>[ 'state.destroy', $state->id], 'method'=>'delete']  ) !!}
{!! Form::submit('Borrar', [ 'class'=> 'btn btn-danger' ] ) !!}
{!!  Form::close() !!}

@endsection
