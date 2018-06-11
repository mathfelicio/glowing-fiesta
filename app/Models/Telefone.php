<?php

namespace ProvaB4\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Telefone.
 *
 * @package namespace ProvaB4\Models;
 */
class Telefone extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_telefone', 'numero'];

    public function contatos()
    {
        return $this->belongsToMany(Contato::class,'telefone_contato', 'telefone_id', 'contato_id');
    }

}
