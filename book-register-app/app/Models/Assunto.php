<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Assunto extends Model
{
    protected $table = 'assunto';
    protected $primaryKey = 'codas';
    public $timestamps = false;

    protected $fillable = [
        'descricao'
    ];

    public function livros(): BelongsToMany
    {
        return $this->belongsToMany(
            Livro::class,
            'livro_assunto',
            'assunto_codas',
            'livro_codl'
        );
    }
}
