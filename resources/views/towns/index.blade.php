@extends('layouts.admin')

@section('breadcrumb_title', 'Ciudades')

@section('content')
 

@include('plantillas.success'  )
 
<div class="row">
    
    <div class="col-12 col-md-4">  {!! Form::select('departamento', $states, null,   ['id'=>'departamento', 'class'=>'form-control mb-2' ]  )   !!}  </div>
     <div class="col-12 offset-md-1 col-md-2"> {!! link_to('town/create', 'Crear', ['class'=> 'btn btn-info'] , null )!!}</div>
</div>
  
 
    <table class="table table-bordered table-striped table-hover table-info" cellpadding="1" style=" width:100%;" >
    <thead class="thead-dark">
        <tr>
            <th>Descripcion</th> 
            <th></th>
             
        </tr>
    </thead>
    <tbody id="ciudades">
        
        @foreach($towns as $ite)
        <tr>
            <td>{{$ite->name}}</td> 
            <td>{!! link_to_route('town.edit',
                '',
                [  $ite->id ] , 
                ['class'=>'btn btn-primary fas fa-edit']  ) !!}</td> 
        </tr>
        @endforeach
    </tbody>
</table>
     


@endsection

@section('scripts')

{!! Html::script('js/list_town.js')  !!}

@endsection
