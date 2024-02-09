<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Controletb;

class ControletbController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormCadastro(){
        return view('cadastrar');
    }
    public function storeCadastro(Request $request){
        $cadastro = $request->validate(['nomeCadastro'=>'string|required',
        'turmaCadastro'=>'string|required',
        'respCadastro'=>'string|required',
        'emailCadastro'=>'string|required',
        'foneCadastro'=>'string|required',
        'endCadastro'=>'string|required',
        'relCadastro'=>'string|required' ]);

        Controletb::Create($cadastro);
        return Redirect::route('index');
    }

    public function showGerenciador(Request $request){
        $dados = Controletb::query();
        $dados->when($request->nomeCadastro,function($query,$nome){
            $query->where('nomeCadastro','like','%'.$nome.'%');
        });
        $dados = $dados->get();
        return view('buscarTodos',['cadastro'=> $dados]);
    }
    public function destroy(Controletb $id){
        $id->delete();
        return Redirect::route('todos-cadastro');
    }

    public function update(Controletb $id, Request $request){
        $cadastro = $request->validate(['nomeCadastro'=>'string|required',
        'turmaCadastro'=>'string|required',
        'respCadastro'=>'string|required',
        'emailCadastro'=>'string|required',
        'foneCadastro'=>'string|required',
        'endCadastro'=>'string|required',
        'relCadastro'=>'string|required']);

        $id->fill($cadastro);
        $id->save();
        return Redirect::route('todos-cadastro');
    }

    public function show(Controletb $id){
        return view('alterar',['cadastro'=>$id]);
    }
}
