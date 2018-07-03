@extends('layouts.admin')
@section('breadcrumb_title', 'Crear una Subcategoria')
@section('content')

 

@include('plantillas.success'  )
 




{!! Form::open(  ['route'=>'subcategory.store' ,  'method'=> 'POST' ]  ) !!}

    @include('subcategories.forms.subcategory') 

{!! Form::close() !!}


@endsection