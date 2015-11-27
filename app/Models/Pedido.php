<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
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
