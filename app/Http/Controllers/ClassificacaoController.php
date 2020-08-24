<?php

namespace App\Http\Controllers;

use App\Classificacao;
use Illuminate\Http\Request;

class ClassificacaoController extends Controller
{
    public function cadastrar(Request $request)
    {
        $classificacao = new Classificacao();

        $classificacao->peso = $request->pesoAmostra;
        $classificacao->umidade = $request->umidade;
        $classificacao->impureza = $request->impureza;
        $classificacao->esverdeados = $request->esverdeados;
        $classificacao->partidosQuebradosAmassados = $request->partidosQuebradosAmassados;
        $classificacao->totalavariados = $request->totalavariados;
        $classificacao->quantidadeGraosInicial = $request->quantidadeGraosInicial;
        $classificacao->quantidadeGraosDescontado = $request->quantidadeGraosDescontado;
        $classificacao->quantidadeGraosFinal = $request->quantidadeGraosFinal;
        $classificacao->dataAtual = $request->dataAtual;
        $classificacao->queimado = $request->queimado;
        $classificacao->mofado = $request->mofado;
        $classificacao->germinado = $request->germinado;
        $classificacao->fermentado = $request->fermentado;
        $classificacao->ardido = $request->ardido;
        $classificacao->danificado = $request->danificado;
        $classificacao->imaturo = $request->imaturo;
        $classificacao->choco = $request->choco;
        $classificacao->gessados = $request->gessados;
        $classificacao->carunchados = $request->carunchados;
        $classificacao->brotados = $request->brotados;
        $classificacao->fragmentados = $request->fragmentados;
        $classificacao->resultTipo = $request->resultTipo;
        $classificacao->resultGrupo = $request->resultGrupo;
        $classificacao->resultClasse = $request->resultClasse;
        $classificacao->amostragem = $request->amostragem;
        $classificacao->usuario = $this->id_logged();
        $classificacao->save();

        if($classificacao == true){
            echo json_encode(["Message" => "Classificação salva com sucesso"]);
        }else {
            echo json_encode(["Message" => "Erro no cadastro, tente novamente"]);
        }
    }

//Pegar o id da pessoa logada no sistema
    public function id_logged(){
        $user = $this->me() ;
        return $user->original->id;
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

}
