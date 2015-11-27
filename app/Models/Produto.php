<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Definindo nome da tabela
    protected $table = "produtos";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'nome',
        'categoria_id',
        'descricao',
        'preco'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
