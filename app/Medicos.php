<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    protected $fillable=["id",'name','passowrd','email','crm','tel','cel'];
    protected $table='medicos';
}
