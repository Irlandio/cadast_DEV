<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCandidato extends Model
{
    protected $table='candidatos';
    protected $fillable=['nome','email','dNasc','Url_linkedin','idade','tecnologias'];
    
    public function search($filter = null)
    {
        $results = $this->where(function($query) use($filter) {
            if($filter)
            {$query->where('tecnologias', 'LIKE', "%{$filter}%");
            }
        })->paginate(5);
     //  dd($results);
        return $results;
    }
    
    
}
