@extends('layouts.admin')
@section('breadcrumb_title', 'Editar una ciudad')
@section('content')

@include('plantillas.success'  )



{!! Form::model( $town,   [  'route'=> ['town.update', $town->id ] , 'method'=>'put'  ]  )!!}
@include('towns.forms.edit')
{!! Form::close()!!}



{!! Form::open( ['route'=>[ 'town.destroy', $town->id], 'method'=>'delete']  ) !!}
{!! Form::submit('Borrar', [ 'class'=> 'btn btn-danger' ] ) !!}
{!!  Form::close() !!}

@endsection

@section('scripts')
{!! Html::script('js/towns/create_town.js') !!}
@endsection