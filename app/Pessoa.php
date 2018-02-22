<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable=["id",'nome','crm','senha','email','telefone_comercial','telefone_residencial'];
    protected $table='pessoas';
}
