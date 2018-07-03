@extends('layouts.admin')

@section('breadcrumb_title', 'Productos')

@section('content')
 

@include('plantillas.success'  )
 
<br>
 {!! link_to('producto/create', 'Crear', ['class'=> 'btn btn-info'] , null )!!}
 <br>
 
 
    <table class=" table table-bordered table-striped table-hover table-info" cellpadding="1" style=" width:100%;" >
    <thead class="thead-dark">
        <tr>
            <th></th>
            <th>Descripcion</th> 
            <th>Precio</th> 
            <th></th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($productos as $ite)
        <tr>
            <td> <img class="img-circle mr-0" src="{{ $ite->foto }}" width="200"  height="200"/> </td>
            <td>{{$ite->name}}</td>
            <td>{{$ite->price}}</td>
            <td>{!! link_to_route('producto.edit',
                '',
                [  $ite->id ] , 
                ['class'=>'btn btn-primary fas fa-edit']  ) !!}</td> 
            
            
        </tr>
        @endforeach
    </tbody>
</table>
     
@endsection
