<?php

namespace IS\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use IS\Repositories\UserRepository;
use IS\Models\User;

/**
 * Class UserRepositoryEloquent
 * @package namespace IS\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    /**
     * get deliverman
     */

    public function getdeliveryman()
    {
        return $this->model->where(['role'=>'deliveryman'])->lists('name','id');

    }

}
