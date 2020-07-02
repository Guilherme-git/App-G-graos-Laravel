<?php

namespace App\Http\Controllers;

use App\Amostragem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmostragemController extends Controller
{
    public function cadastrar(Request $request){
       $amostragem = new Amostragem();
       $amostragem->data_amos = $request->data;
       $amostragem->placa_caminhao_amos = $request->placaCaminhaoAmostragem;
       $amostragem->peso_amos = $request->pesoAmostragem;
       $amostragem->estado_amos = $request->estado;
       $amostragem->tipo_grao = $request->tipoGrao;
       $amostragem->usuario = $this->id_logged();
       $amostragem->save();

       if($amostragem == true){
           echo json_encode(["Message" => "Cadastrado com sucesso"]);
       }else {
           echo json_encode(["Message" => "Erro no cadastro, tente novamente"]);
       }
    }

    public function EditarAmostragem(Request $request){
        $amostra = DB::select('select * from amostragem where id_amos=? and usuario=?',[
            $request->id_amos,
            $this->id_logged()
        ]);

        if(empty($amostra)){
            echo json_encode(["Message" => "Nenhuma amostragem cadastrada"]);
        }else {
           $amostra = DB::update('update amostragem set data_amos=?, placa_caminhao_amos=?, peso_amos=?,
            estado_amos=?, tipo_grao=? where usuario=? and id_amos=?',[
                $request->data,
                $request->placaCaminhaoAmostragem,
                $request->pesoAmostragem,
                $request->estado,
                $request->tipoGrao,
                $this->id_logged(),
                $request->id_amos
           ]);

           if($amostra == true){
               echo json_encode(["Message" => "Editado com sucesso"]);
           }else {
               echo json_encode(["Message" => "Erro no cadastro, tente novamente"]);
           }
        }
    }

    public function buscarFejao(Request $request){
        $feijao = DB::select('select * from amostragem where tipo_grao=? and estado_amos=? and usuario=?',[
            'Feijão',
            'Ativo',
            $this->id_logged()
        ]);

        if(empty($feijao)){
            echo json_encode(["Message" => "Nenhuma amostragem cadastrada"]);
        }else {
            return $feijao;
        }
    }

    public function buscarSoja(Request $request){
        $soja = DB::select('select * from amostragem where tipo_grao=? and estado_amos=? and usuario=?',[
            'Soja',
            'Ativo',
            $this->id_logged()
        ]);

        if(empty($soja)){
            echo json_encode(["Message" => "Nenhuma amostragem cadastrada"]);
        }else {
            return $soja;
        }
    }

    public function buscarSorgo(Request $request){
        $sorgo = DB::select('select * from amostragem where tipo_grao=? and estado_amos=? and usuario=?',[
            'Sorgo',
            'Ativo',
            $this->id_logged()
        ]);

        if(empty($sorgo)){
            echo json_encode(["Message" => "Nenhuma amostragem cadastrada"]);
        }else {
            return $sorgo;
        }
    }

    public function buscarMilho(Request $request){
        $milho = DB::select('select * from amostragem where tipo_grao=? and estado_amos=? and usuario=?',[
            'Milho',
            'Ativo',
            $this->id_logged()
        ]);

        if(empty($milho)){
            echo json_encode(["Message" => "Nenhuma amostragem cadastrada"]);
        }else {
            return $milho;
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