<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    
    protected $table= "personas";
    
    
    protected $primaryKey= "nrodoc";
    
}
