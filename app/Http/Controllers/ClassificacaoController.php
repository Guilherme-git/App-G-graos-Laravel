<?php

namespace App\Http\Controllers;

use App\Classificacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassificacaoController extends Controller
{
    public function cadastrar(Request $request)
    {
        $classificacao = new Classificacao();

        $classificacao->pesoAmostra = $request->pesoAmostra;
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
        $classificacao->amostragem = $request->amostragem["id_amos"];
        $classificacao->usuario = $this->id_logged();
        $classificacao->laudo_pqa = $request->laudo_pqa;
        $classificacao->laudo_qi = $request->laudo_qi;
        $classificacao->laudo_qu = $request->laudo_qu;
        $classificacao->laudo_impurezasRemovidas = $request->laudo_impurezasRemovidas;
        $classificacao->laudo_produto_inicial = $request->laudo_produto_inicial;
        $classificacao->laudo_produto_limpo = $request->laudo_produto_limpo;
        $classificacao->laudo_agua_removida = $request->laudo_agua_removida;
        $classificacao->laudo_total_desconto = $request->laudo_total_desconto;
        $classificacao->laudo_produto_armazenado = $request->laudo_produto_armazenado;
        $classificacao->graoDuro = $request->graoDuro;
        $classificacao->graoDentado = $request->graoDentado;
        $classificacao->graoSemiduro = $request->graoSemiduro;
        $classificacao->graoAmarelo = $request->graoAmarelo;
        $classificacao->graoBranco = $request->graoBranco;
        $classificacao->graoCores = $request->graoCores;
        $classificacao->insetosMortos = $request->insetosMortos;
        $classificacao->atacadosInsetos = $request->atacadosInsetos;
        $classificacao->save();

        if($classificacao == true){
            echo json_encode(["Message" => "Classificação salva com sucesso"]);
        }else {
            echo json_encode(["Message" => "Erro no cadastro, tente novamente"]);
        }
    }

    public function buscarClassificacao(Request  $request)
    {
        $classificacao = DB::table('classificacao')
            ->where('amostragem', $request->id)
            ->where('classificacao.usuario','=',$this->id_logged())
            ->get();

        if($classificacao->get(0) == null){
            return json_encode(["Message" => "Nenhuma classificação encontrada"]);
        }else {
            return json_encode($classificacao);
        }
    }

    public function editarClassificacao(Request $request)
    {
        $classificacao = Classificacao::find($request->id);

        if($classificacao == null){
            return json_encode(["Message" => "Nenhuma classificação encontrada"]);
        }else {
            $classificacao->pesoAmostra = $request->pesoAmostra;
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
            $classificacao->laudo_pqa = $request->laudo_pqa;
            $classificacao->laudo_qi = $request->laudo_qi;
            $classificacao->laudo_qu = $request->laudo_qu;
            $classificacao->laudo_impurezasRemovidas = $request->laudo_impurezasRemovidas;
            $classificacao->laudo_produto_inicial = $request->laudo_produto_inicial;
            $classificacao->laudo_produto_limpo = $request->laudo_produto_limpo;
            $classificacao->laudo_agua_removida = $request->laudo_agua_removida;
            $classificacao->laudo_total_desconto = $request->laudo_total_desconto;
            $classificacao->laudo_produto_armazenado = $request->laudo_produto_armazenado;
            $classificacao->graoDuro = $request->graoDuro;
            $classificacao->graoDentado = $request->graoDentado;
            $classificacao->graoSemiduro = $request->graoSemiduro;
            $classificacao->graoAmarelo = $request->graoAmarelo;
            $classificacao->graoBranco = $request->graoBranco;
            $classificacao->graoCores = $request->graoCores;
            $classificacao->insetosMortos = $request->insetosMortos;
            $classificacao->atacadosInsetos = $request->atacadosInsetos;
            $classificacao->save();

            if($classificacao == true){
                echo json_encode(["Message" => "Classificação editada com sucesso"]);
            }else {
                echo json_encode(["Message" => "Erro no editar, tente novamente"]);
            }
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
