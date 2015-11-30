<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pedido extends Model implements Transformable
{
    use TransformableTrait;

    // Definindo nome da tabela
    protected $table = "pedidos";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'cliente_id',
        'entregador_id',
        'total',
        'status'
    ];

    public function itens()
    {
        return $this->hasMany(PedidoItem::class);
    }

    public function entregador()
    {
        return $this->belongsTo(User::class);
    }

}
