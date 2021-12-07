@extends('layouts.template')

@section('titulo', 'Produtos - Excluir')

@section('conteudo')

    <div class="container">

        <div class="card bg-light mb-3">
            <div class="card-body">
                <h5 class="card-title fs-2">Produto - Excluir</h5>
            </div>
        </div>

        <form method="POST" action="{{route('produtos.deletar', $produto)}}">
            @csrf
            @method('DELETE')
            
            <div class="mb-3">
                <label for="nome" class="form-label">
                    Deseja excluir o produto <b>{{$produto->nome}}</b>?
                </label>
            </div>
            <button type="submit" name="salvar" class="btn btn-primary">Excluir</button>
        </form>

    </div>
@endsection
