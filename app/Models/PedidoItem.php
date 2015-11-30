<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PedidoItem extends Model implements Transformable
{
    use TransformableTrait;

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
