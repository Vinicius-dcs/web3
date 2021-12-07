@extends('layouts.template')

@section('titulo', 'Produtos - Ver')

@section('conteudo')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-bold mb-3"><?= $produto->nome ?></h5>
            <p class="card-text mb-3 text-muted"><?= $produto->valor ?></p>
            <p class="card-text mb-3"><?= $produto->descricao ?></p>
            <a href="/produtos" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
    </div>
@endsection
