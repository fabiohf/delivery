<?php

namespace Delivery\Http\Controllers;

use Illuminate\Http\Request;
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

    public function gravar(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.categorias');
    }
}
