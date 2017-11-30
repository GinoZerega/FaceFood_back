<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table ='recetas';
    protected $primaryKey ='id';
    protected $fillable =['nombre','tipo','ingredientes','preparacion'];
    
}
