<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
   
    protected $connection = 'mysql';
    
    
    protected $fillable=  ['name'];
    
    
    
    
    
    public function towns(){
        return $this->hasMany('Restaurant\Town');
    }
}
