<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

     protected $fillable = ['name','body','user_id','category_id']; //Campos que se van a asignacion masiva:


    //Relacion Uno a Muchos (Inversa) con User
     public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion Uno a Muchos (Inversa) con Categoria
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
