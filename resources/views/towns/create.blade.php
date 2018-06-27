@extends('layouts.admin')
@section('breadcrumb_title', 'Registrar una ciudad')
@section('content')

@include('plantillas.success'  )



{!! Form::open( ['route'=> 'town.store'   ]  )!!}
@include('towns.forms.create')
{!! Form::close()!!}


@endsection

@section('scripts')
{!! Html::script('js/create_town.js') !!}
@endsection