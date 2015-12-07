@extends('app')

@section('content')

    <div class="container">
        <div class="page-header">
            <h3>Categorias</h3>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group">
                    <a href="{{ route('admin.categorias.novo') }}" class="btn btn-primary">Nova Categoria</a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    @foreach($categorias as $categoria)
                        <tr>
                            <th>{{ $categoria->id }}</th>
                            <th>{{ $categoria->nome }}</th>
                            <th>
                                <a href="{{route('admin.categorias.editar', ['id'=>$categoria->id])}}" class="btn btn-default btn-sm">
                                    Editar
                                </a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="panel-footer text-center">
                {!! $categorias->render() !!}
            </div>
        </div>
    </div>

@endsection
