<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    // Definindo nome da tabela
    protected $table = "clientes";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'user_id',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'cep'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
