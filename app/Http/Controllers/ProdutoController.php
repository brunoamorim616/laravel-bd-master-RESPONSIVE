<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $produto = \App\Produto::get();
        return view('produto.index', compact('produto'));
    }
    
    public function create() {
        return view('produto.create');
    }
    
    public function store(Request $request) {
        
        $produto = new \App\Produto();
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
        $produto->save();
       
        return redirect('/produto')->with('msg', 'Produto cadastrado  com sucesso!');
    }
    
    public function destroy($codpro) {
        $produto = \App\Produto::find($codpro);
        $produto->delete();
        
        return redirect('/produto')->with('proEliminado', 'Produto eliminado');
    }
    
    public function edit($codpro) {
        $produto = \App\Produto::find($codpro);
        return view('produto.edit', compact('produto'));
    }
    
    public function update(Request $request, $codpro) {
        
        $produto = \App\Produto::find($codpro);
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
        $produto->save();
        
        return redirect('/produto')->with('alterado', 'Produto alterado com sucesso !');
        
    }

}
