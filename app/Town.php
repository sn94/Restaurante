<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    
    
    protected $connection= "mysql";
    
    
    protected $fillable= ['name', 'state_id'];
    
    
    public function state(){
        
    return $this->belongsTo('Restaurant\State');
    
    }
    
    
}
