<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{ 
    protected $connection="mysql";
    
    protected $fillable=['name', 'address', 'cellphone', 'telephone' ];
    
}
