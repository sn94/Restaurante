
@extends('layouts.admin')

@section('breadcrumb_title', 'Editar subcategoria')

@section('content')

@include('plantillas.success'  )
 

{!! Form::model( $subcategory, ['route'=> ['subcategory.update',  $subcategory->id ] , 'method'=> 'put' ]  )  !!}
@include( 'subcategories.forms.subcategory')
{!! Form::close() !!}

<br>
{!!Form::open(  ['route'=> ['subcategory.destroy',  $subcategory->id ] , 'method'=> 'delete'   ] ) !!}
{!! Form::submit('Borrar', ['class'=> 'btn btn-danger' ]  ) !!}
{!! Form::close() !!}

@endsection