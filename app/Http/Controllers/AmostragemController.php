<?php

namespace App\Http\Controllers;

use App\Amostragem;
use Illuminate\Http\Request;

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
