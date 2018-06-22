@if( Session::has('mensaje') )

 
<div class="alert alert-success"> 
    
    <div class="alert-heading">
        <strong>Operaci&oacute;n exitosa</strong>
    </div>

    
     {{  Session::get('mensaje')  }}
    
</div>


@endif

