<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    
    
    protected $connection= "mysql";
    
    
    
    
    public function state(){
        
    return $this->belongsTo('Restaurant\State');
    
    }
    
    
}
