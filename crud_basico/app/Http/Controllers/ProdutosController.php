<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller{

    public function create(){
        $prod = Produto::simplepaginate(10);
        return view('produtos/form',['prod' => $prod]);
    }

    public function store(Request $request){
        if ($request != $request->id) {
            Produto::create([
                'nome' => $request->nome,
                'custo' => $request->custo,
                'preco' => $request->preco,
                'quantidade' => $request->quantidade
            ]);
            return redirect('/')->with('msg', 'Produto inserido com sucesso !!!');

        } else {

            return redirect('/')->with('msg-erro', 'Erro ao Inserir Produto !!!');
        }   
    }

    public function edit($id){
        $prod = Produto::findOrfail($id);
        return view('produtos/edit',['prod' => $prod]);
    }

    public function update(Request $request, $id){
        $prod = Produto::findOrfail($id);
        $prod -> update([
        'nome' => $request->nome,
        'custo' => $request->custo,
        'preco' => $request->preco,
        'quantidade' => $request->quantidade,
        ]);
        return redirect('/')->with('msg', 'Produto Alterado com sucesso !!!');
    }

    public function delete($id){
        $prod = Produto::findOrfail($id);
        return view('produtos/delete',['prod' => $prod]);
    }
   
    public function destroy($id){
        $prod = Produto::findOrfail($id);
        if ($prod->id == $id){
            
            $prod->delete();
                return redirect('/')->with('msg', 'Produto excluido com sucesso !!!');
        } else {
            return redirect('/')->with('msg-erro', 'Erro ao Excluir Produto !!!');
        }
    }
}
