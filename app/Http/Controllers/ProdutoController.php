<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Exibe uma lista de produtos
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    // Mostra o formulário para criar um novo produto
    public function create()
    {
        return view('produtos.create');
    }

    // Armazena um novo produto no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'peso' => 'required|integer',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    // Mostra um produto específico
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    // Mostra o formulário para editar um produto
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    // Atualiza um produto específico no banco de dados
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'peso' => 'required|integer',
            'preco' => 'required|numeric',
            'estoque' => 'required|integer',
        ]);

        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    // Remove um produto específico do banco de dados
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
