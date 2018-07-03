<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection= "mysql";
    
    protected $fillable= ['name'];
    
    
    public function subCategories(){
        return $this->hasMany("Restaurant\SubCategory");
    }
}
