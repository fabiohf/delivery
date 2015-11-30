<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categoria extends Model implements Transformable
{
    use TransformableTrait;

    // Definindo nome da tabela
    protected $table = "categorias";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'nome'
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

}
