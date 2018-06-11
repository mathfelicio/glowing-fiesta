<?php

namespace ProvaB4\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use ProvaB4\Repositories\ContatoRepository;
use ProvaB4\Models\Contato;
use ProvaB4\Validators\ContatoValidator;

/**
 * Class ContatoRepositoryEloquent.
 *
 * @package namespace ProvaB4\Repositories;
 */
class ContatoRepositoryEloquent extends BaseRepository implements ContatoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contato::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
