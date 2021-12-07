@extends('layouts.template')

@section('titulo', 'Usuário - Listar')

@section('conteudo')

    <div class="card bg-light mb-3">
        <div class="card-body">
            <h5 class="card-title fs-2">Produto - Listar</h5>
            <p class="card-text mb-2">{{ $count }} registros encontrados.</p>
            <a href="{{ route('produtos.inserir') }}" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ação</th>
            </tr>
        </thead>

        @foreach ($produtos as $produto)
            <tr>
                <td>
                    <p>{{ $produto->nome }}</p>
                </td>
                <td>
                    <p>{{ $produto->descricao }}</p>
                </td>
                <td>
                    <p>{{ $produto->valor }}</p>
                </td>
                <td>
                    <a href="{{route('produtos.ver', $produto->id)}}" title="Visualizar produto">
                        <button type="button" class="btn btn-secondary btn-sm"> <i class="far fa-eye"></i></button>
                    </a>
                    <a href="{{route('produtos.edit', $produto)}}" title="Alterar produto">
                        <button type="button" class="btn btn-warning btn-sm"> <i class="far fa-edit"></i></button>
                    </a>
                    <a href="{{route('produtos.delete', $produto->id)}}" title="Excluir produto">
                        <button type="button" class="btn btn-danger btn-sm"> <i class="far fa-trash-alt"></i></button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
    {{ $produtos->links() }}


@endsection
