<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    // Definindo nome da tabela
    protected $table = "pedidos_item";

    // Atributos que poderam ser gravados em massa
    protected $fillable = [
        'produto_id',
        'pedido_id',
        'preco',
        'quantidade'
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

}
