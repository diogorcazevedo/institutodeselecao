<?php

namespace IS\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use IS\Repositories\ProductRepository;
use IS\Models\Product;

/**
 * Class ProductRepositoryEloquent
 * @package namespace IS\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{


    public function lists()
    {
        return $this->model->get(['id','name','price']);
    }
    
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
