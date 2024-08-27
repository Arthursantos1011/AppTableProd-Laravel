<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoDetalhe;
use Illuminate\Http\Request;

class ProdutoDetalhesController extends Controller
{
    // Exibe uma lista de detalhes de produtos
    public function index()
    {
        $produtoDetalhes = ProdutoDetalhe::all();
        return view('produto_detalhes.index', compact('produtoDetalhes'));
    }

    // Mostra o formulário para criar um novo detalhe de produto
    public function create()
    {
        $produtos = Produto::all();
        return view('produto_detalhes.create', compact('produtos'));
    }

    // Armazena um novo detalhe de produto no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
        ]);

        ProdutoDetalhe::create($request->all());
        return redirect()->route('produto_detalhes.index');
    }

    // Mostra um detalhe de produto específico
    public function show(ProdutoDetalhe $produtoDetalhe)
    {
        return view('produto_detalhes.show', compact('produtoDetalhe'));
    }

    // Mostra o formulário para editar um detalhe de produto
    public function edit(ProdutoDetalhe $produtoDetalhe)
    {
        $produtos = Produto::all();
        return view('produto_detalhes.edit', compact('produtoDetalhe', 'produtos'));
    }

    // Atualiza um detalhe de produto específico no banco de dados
    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric',
        ]);

        $produtoDetalhe->update($request->all());
        return redirect()->route('produto_detalhes.index');
    }

    // Remove um detalhe de produto específico do banco de dados
    public function destroy(ProdutoDetalhe $produtoDetalhe)
    {
        $produtoDetalhe->delete();
        return redirect()->route('produto_detalhes.index');
    }
}
