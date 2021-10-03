<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   public function create()
   {
        return view ('produtos.create');
   }

   public function store(Request $request) 
   {
       Produto::create([
           'nome' => $request->nome,
           'custo' => $request->custo,
           'preco' => $request->preco,
           'quantidade' => $request->quantidade
       ]);
       return "Produto cadastrado com sucesso!";
   }
   public function show($id) {
       $produto = Produto::findOrFail($id);
       return view ('produtos.lista', ['produto' => $produto]);
   }
}
