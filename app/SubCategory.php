<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    
    protected  $connection= "mysql";
    
    protected $fillable= [ 'name', 'category_id'];
    
    
    public function category(){
       return $this->belongsTo("Restaurant\Category");
    }
    
    
    
}
