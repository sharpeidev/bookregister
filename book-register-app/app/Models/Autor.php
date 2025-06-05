<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Autor extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'codau';
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];

    public function livros(): BelongsToMany
    {
        return $this->belongsToMany(
            Livro::class,
            'livro_autor',
            'autor_codau',
            'livro_codl'
        );
    }

}
