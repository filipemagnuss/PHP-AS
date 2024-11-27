<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable =[
        'titulo',
        'publicacao',
        'genero'
    ];

    public function autores(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
}
