
@extends('layouts.admin')

@section('breadcrumb_title', 'Editar categoria')

@section('content')

@include('plantillas.success'  )
 

{!! Form::model( $category, ['route'=> ['category.update',  $category->id ] , 'method'=> 'put' ]  )  !!}
@include( 'categories.forms.category')
{!! Form::close() !!}

<br>
{!!Form::open(  ['route'=> ['category.destroy',  $category->id ] , 'method'=> 'delete'   ] ) !!}
{!! Form::submit('Borrar', ['class'=> 'btn btn-danger' ]  ) !!}
{!! Form::close() !!}

@endsection