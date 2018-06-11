<?php

namespace ProvaB4\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ProvaB4\Repositories\TelefoneRepository;
use ProvaB4\Models\Telefone;
use ProvaB4\Validators\TelefoneValidator;

/**
 * Class TelefoneRepositoryEloquent.
 *
 * @package namespace ProvaB4\Repositories;
 */
class TelefoneRepositoryEloquent extends BaseRepository implements TelefoneRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Telefone::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
