<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Definindo nome da tabela
    protected $table = "categorias";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'nome'
    ];
}
