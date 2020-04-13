<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    protected $table="persona";
    protected $fillable = ['NombrePersona','CedulaPersona','EmailPersona'];
}
