<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public $nome;
    public $nomeSobrenome;
    
    public function escreverString(Request $request, $id){
        #dd($id, $request -> nome);
        #return "Olá Mundo! Seja bem vindo ".$request->nome;
        return view("teste/teste");
    }
    
    private function escreverDentroDaClasse(){
        return "Dentro da classe";
    }
    
    protected function escreverParaOutrasClasses(){
        return "Outras Classes";
    }
    
    public function testarMetodoPrivado(){
        return $this->escreverdentroDaClasse();
    }

}