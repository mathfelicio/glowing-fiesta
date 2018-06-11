<?php

namespace ProvaB4\Http\Controllers;

use Illuminate\Http\Request;
use ProvaB4\Http\Requests\ContatoCreateRequest;
use ProvaB4\Http\Requests\ContatoUpdateRequest;
use ProvaB4\Repositories\ContatoRepository;
use ProvaB4\Services\ContatoService;

class ContatoController extends Controller
{

    protected $repository;
    protected $contatoService;

    public function __construct(ContatoRepository $repository, ContatoService $contatoService)
    {
        $this->repository = $repository;
        $this->contatoService = $contatoService;
    }

    public function index()
    {
        return view('contato.index');
    }

    public function create()
    {
        return view('contato.create');
    }

    public function store(ContatoCreateRequest $request)
    {
        $this->contatoService->cadastrarContato($request);

        return back();
    }

    public function edit($idContato)
    {
        $contato = $this->repository->find($idContato);
        return view('contato.edit', compact('contato'));
    }

    public function update(ContatoUpdateRequest $request, $id)
    {
        $this->contatoService->atualizarContato($request, $id);
        return back();
    }

    public function confirm($idContato)
    {
        $contato = $this->repository->find($idContato);
        return view('contato.confirm', compact('contato'));
    }

    public function delete($idContato)
    {
        $this->contatoService->removerContato($idContato);
        return redirect(route('index'));
    }

    public function buscar()
    {
        $contatos = $this->repository->all();
        return response()->json($contatos);
    }
}

