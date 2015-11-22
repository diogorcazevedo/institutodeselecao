<?php

namespace IS\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use IS\Repositories\ProductImageRepository;
use IS\Models\ProductImage;

/**
 * Class ProductImageRepositoryEloquent
 * @package namespace IS\Repositories;
 */
class ProductImageRepositoryEloquent extends BaseRepository implements ProductImageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductImage::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
