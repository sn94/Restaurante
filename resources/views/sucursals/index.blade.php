@extends('layouts.admin')
@section('breadcrumb_title', 'Sucursales')

@section('content')
@include('plantillas.success'  )


{!! link_to('sucursal/create', 'Crear', ['class'=> 'btn btn-info mb-2 mt-2'] , null )!!}
 
<table class=" table table-bordered table-striped table-hover table-info" cellpadding="1" style=" width:100%;" >
    <thead class="thead-dark">
        <tr>
            
            <th>Nombre</th> 
            <th>Tel&eacute;fono</th> 
            <th></th>
        </tr>
    </thead>
    <tbody id="body-sucursals">
        
        @foreach($sucursals as $ite)
        <tr>
             <td>{{$ite->name}}</td>
            <td>{{$ite->telephone}}</td>
            <td>{!! link_to_route('sucursal.edit',
                '',
                [  $ite->id ] , 
                ['class'=>'btn btn-primary fas fa-edit']  ) !!}</td> 
            
            
        </tr>
        @endforeach
    </tbody>
</table>

@endsection