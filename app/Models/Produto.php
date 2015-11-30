<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produto extends Model implements Transformable
{
    use TransformableTrait;

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
