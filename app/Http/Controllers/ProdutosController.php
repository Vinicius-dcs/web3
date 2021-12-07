<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('nome', 'asc')->paginate();
        $count = Produto::all()->count();
        return view('produtos.index', ["produtos" => $produtos, "count" => $count]);
    }

     public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', ['produto' => $produto]);
    } 

    public function insert(Request $request) {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "O produto {{$produto->nome}} foi incluído com sucesso!";
        return redirect()->route('produtos.principal')->with('success', $mensagem);
    }

    public function edit(Produto $produto) {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, Produto $produto) {
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();

        $mensagem = "O produto {{$produto->nome}} foi alterado com sucesso!";
        return redirect()->route('produtos.principal')->with('warning', $mensagem);
    }

    public function delete(Produto $produto) {
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function deletar(Produto $produto) {
        $mensagem = "O registro {{$produto->id}} foi excluído com sucesso!";
        $produto->delete();
        return redirect()->route('produtos.principal')->with('success', $mensagem);
    }

    public function create()
    {
        return view('produtos.create');
    }
}
