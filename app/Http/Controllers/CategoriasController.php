<?php

namespace Delivery\Http\Controllers;

use Delivery\Http\Requests\AdminCategoriasRequest;
use Delivery\Repositories\CategoriaRepository;

class CategoriasController extends Controller
{
    private $repository;

    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categorias = $this->repository->paginate();
        return view('admin.categorias.index', compact('categorias'));
    }

    public function novo()
    {
        return view('admin.categorias.novo');
    }

    public function criar(AdminCategoriasRequest $request)
    {
        $dados = $request->all();
        $this->repository->create($dados);
        return redirect()->route('admin.categorias');
    }

    public function editar($id)
    {
        $categoria = $this->repository->find($id);
        return view('admin.categorias.editar', compact('categoria'));
    }

    public function alterar(AdminCategoriasRequest $request, $id)
    {
        $dados = $request->all();
        $this->repository->update($dados, $id);
        return redirect()->route('admin.categorias');
    }
}
