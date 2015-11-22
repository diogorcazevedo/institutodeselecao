<?php

namespace IS\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface OrderRepository
 * @package namespace IS\Repositories;
 */
interface OrderRepository extends RepositoryInterface
{
    public function getByIdAndDeliveryman($id,$idDeliveryman);
}
