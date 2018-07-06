<?php

namespace Restaurant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class Producto extends Model
{
    protected $table= "productos";
    protected $connection= "mysql";
    
    
    
    
    protected $fillable= ['name', 'detail', 'price', 'foto', 'category_id'];
    
    //accesor getter
     
    public function getFotoAttribute($foto){
        
        return '/storage/productos/'.$foto ;
    }
    
    
    //mutador settter
    
     
    public function setFotoAttribute($path_to_temp_file){
        if(  $path_to_temp_file ){
                    $path=    Storage::putFile('', new File( $path_to_temp_file )  );
                    $this->attributes['foto']=   $path;
        }

    }
    
    
    public function category(){
        return $this->belongsTo("Restaurant\Category");
    }
    
    //Storage::put      filename    filecontent
    //Storage::putFile  directoryname   fileinstance
    //Storage::putFileAs directoryname fileinstance customname
    //Storage::storeAs
}
