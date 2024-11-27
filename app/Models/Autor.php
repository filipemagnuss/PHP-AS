<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    public function livro(): HasMany{
        return $this->hasMany(Livro::class);
    }
    
    protected $fillable =[
        'nome',
        'biografia',
        'nascimento'
    ];
}
