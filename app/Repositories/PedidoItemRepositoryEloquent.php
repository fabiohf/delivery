<?php

namespace Delivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Delivery\Repositories\PedidoItemRepository;
use Delivery\Models\PedidoItem;

/**
 * Class PedidoItemRepositoryEloquent
 * @package namespace Delivery\Repositories;
 */
class PedidoItemRepositoryEloquent extends BaseRepository implements PedidoItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PedidoItem::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
