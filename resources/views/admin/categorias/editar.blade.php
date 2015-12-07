@extends('app')

@section('content')

    <div class="container">
        <div class="page-header">
            <h3>Editando Categoria</h3>
        </div>

        @if($errors->any())
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group">
                    <a href="{{ route('admin.categorias') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
            <div class="panel-body">
                {!!  Form::model($categoria, ['route'=>['admin.categorias.alterar',$categoria->id]]) !!}

                @include('admin.categorias._form')

                <div class="form-group">
                    {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
                </div>
                {!!  Form::close() !!}
            </div>
        </div>
    </div>

@endsection
