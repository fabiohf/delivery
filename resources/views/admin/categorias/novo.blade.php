@extends('app')

@section('content')

    <div class="container">
        <div class="page-header">
            <h3>Nova Categoria</h3>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <div class="btn-group">
                    <a href="{{ route('admin.categorias') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
            <div class="panel-body">
                {!!  Form::open(['route'=>'admin.categorias.gravar']) !!}
                <div class="form-group">
                    {!! Form::label('Nome', 'Nome:') !!}
                    {!! Form::text('nome', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
                </div>
                {!!  Form::close() !!}
            </div>
        </div>
    </div>

@endsection
