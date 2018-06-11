<?php

namespace ProvaB4\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contato.
 *
 * @package namespace ProvaB4\Models;
 */
class Contato extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'email', 'foto'];

    public function telefones()
    {
        return $this->belongsToMany(Telefone::class, 'telefone_contatos', 'contato_id', 'telefone_id');
    }
}
