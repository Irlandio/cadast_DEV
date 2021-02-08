<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCandidato extends Model
{
    protected $table='candidatos';
    protected $fillable=['nome','email','dNasc','Url_linkedin','idade','tecnologias'];
}
