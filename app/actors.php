<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
    protected $table="actor";
    protected $fillable = ['NombreActor'];
    
}
