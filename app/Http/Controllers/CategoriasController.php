<?php

namespace Delivery\Http\Controllers;

use Delivery\Http\Requests;
use Delivery\Repositories\CategoriaRepository;

class CategoriasController extends Controller
{
    public function index(CategoriaRepository $repository)
    {
        $categorias = $repository->paginate(5);
        return view('admin.categorias.index', compact('categorias'));
    }

    public function novo()
    {
        return view('admin.categorias.novo');
    }

    public function gravar()
    {

    }
}
