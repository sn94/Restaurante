@extends('layouts.admin')

@section('breadcrumb_title', 'Categorias')

@section('content')
 

@include('plantillas.success'  )
 
<br>
 {!! link_to('category/create', 'Crear', ['class'=> 'btn btn-info'] , null )!!}
 <br>
 
 
    <table class=" table table-bordered table-striped table-hover table-info" cellpadding="1" style=" width:100%;" >
    <thead class="thead-dark">
        <tr>
            <th>Descripcion</th> 
            <th></th>
             
        </tr>
    </thead>
    <tbody>
        
        @foreach($categories as $ite)
        <tr>
            <td>{{$ite->name}}</td>
            
            <td>{!! link_to_route('category.edit',
                '',
                [  $ite->id ] , 
                ['class'=>'btn btn-primary fas fa-edit']  ) !!}</td> 
            
            
        </tr>
        @endforeach
    </tbody>
</table>
     


@endsection
