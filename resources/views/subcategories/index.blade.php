@extends('layouts.admin')

@section('breadcrumb_title', 'SubCategorias')

@section('content')
 

@include('plantillas.success'  )
 
<br>
 {!! link_to('subcategory/create', 'Crear', ['class'=> 'btn btn-info mb-2'] , null )!!}
  
 
 
 {!! Form::select( 'category_id', $categories, null, [ 'id'=> 'category_id', 'class'=> 'form-control mb-2' ] )   !!}
 
    <table class=" table table-bordered table-striped table-hover table-info" cellpadding="1" style=" width:100%;" >
    <thead class="thead-dark">
        <tr>
            <th>Descripcion</th>  
            <th></th>
             
        </tr>
    </thead>
    <tbody id="body-subcat">
        
        @foreach($subcategories as $ite)
        <tr>
            <td>{{$ite->name}}</td>  
            <td>{!! link_to_route('subcategory.edit',
                '',
                [  $ite->id ] , 
                ['class'=>'btn btn-primary fas fa-edit']  ) !!}</td> 
            
            
        </tr>
        @endforeach
    </tbody>
</table>
     


@endsection




@section('scripts')


{!! Html::script('js/subcat/list_subcat.js' )  !!}


@endsection
