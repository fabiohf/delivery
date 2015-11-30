<?php

namespace Delivery\Http\Controllers;

use Delivery\Http\Requests;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('admin.categorias.index');
    }
}
