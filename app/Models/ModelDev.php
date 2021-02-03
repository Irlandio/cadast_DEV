<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelDev extends Model
{
    protected $table='candidatos';
    protected $fillable=['nome','email','dNasc','Url_linkedin','idade','tecnologias'];
}
