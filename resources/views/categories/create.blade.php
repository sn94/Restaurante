@extends('layouts.admin')
@section('breadcrumb_title', 'Crear una categoria')
@section('content')

 

@include('plantillas.success'  )
 




{!! Form::open(  ['route'=>'category.store' ,  'method'=> 'POST' ]  ) !!}

    @include('categories.forms.category') 

{!! Form::close() !!}


@endsection