<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\SpecificationRepository;
use App\Models\Specification;
use App\Validators\SpecificationValidator;

/**
 * Class SpecificationRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class SpecificationRepositoryEloquent extends BaseRepository implements SpecificationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Specification::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
