<?php

namespace ProvaB4\Services;


use Illuminate\Http\Request;
use ProvaB4\Repositories\ContatoRepository;

class ContatoService
{
    protected $repository;

    /**
     * PessoaService constructor.
     * @param ContatoRepository $repository
     */
    public function __construct(ContatoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function cadastrarContato(Request $request)
    {
        try {

            $contato = $this->repository->create($request->contato);
            $contato->telefones()->create($request->telefones);

            flash()->success('Contato registrado com sucesso!');

            return $contato;
        } catch (\Exception $e) {

            if (isset($contato)) {
                $contato->telefones()->sync([]);
                $contato->delete;
            }

            flash()->error('Houve um erro ao tentar inserir o contato.');
        }


    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function atualizarContato(Request $request, $id)
    {
        try {
            if (isset($request->foto)) {
                $caminho = uniqid(date('HisYmd')) . '.' .$request->foto->extension();
                $request->foto->storeAs('fotos', $caminho);
                $contato = $this->repository->update(['foto' => $caminho], $id);
            }

            $contato = $this->repository->update($request->contato, $id);

            $contato->telefones()->update($request->telefones);

            flash()->success('Dados modificados com sucesso!');

            return $contato;
        } catch (\Exception $e) {
            if (isset($contato)) {
                $contato->telefones()->sync([]);
            }

            flash()->error('Desculpe, ocorreu um erro ao tentar realizar a atualização');
        }
    }

    public function removerContato($id)
    {
        try {
            $contato = $this->repository->find($id);
            $contato->telefones()->detach();
            $contato->delete($id);

            flash()->success('Dados removidos com sucesso!');

            return $contato;
        } catch (\Exception $e) {
            flash()->error('Desculpe, ocorreu um erro ao tentar realizar a remoção');
        }
    }
}