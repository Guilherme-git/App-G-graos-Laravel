<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function cadastrar(Request $request){
        $user = User::where('identificacao','=',$request->identificacao)->get();

        if($user->get(0) == null){
            $user = new User();
            $user->identificacao = $request->identificacao;
            $user->fazenda = $request->fazenda;
            $user->nome = $request->nome;
            $user->password = bcrypt($request->password);
            $status = $user->save();

            if ($status == true){
                echo json_encode(["Message" => "Cadastrado com sucesso"]);
            }else {
                echo json_encode(["Message" => "Erro no cadastro, tente novamente"]);
            }
        }else {
            echo json_encode(["Message" => "Esse usuário já está sendo usado, tente outro"]);
        }
    }

    public function EditarUsuario(Request $request){
        if($request->password != null){
            $usuario = User::find($this->id_logged());
            $usuario->fazenda = $request->fazenda;
            $usuario->identificacao = $request->identificacao;
            $usuario->nome = $request->nome;
            $usuario->password = bcrypt($request->password);
            $update = $usuario->save();

            if($update == true){
                echo json_encode(["Message" => "Editado com sucesso"]);
            }else {
                echo json_encode(["Message" => "Erro na edição, tente novamente"]);
            }
        }else {
            $usuario = User::find($this->id_logged());
            $usuario->fazenda = $request->fazenda;
            $usuario->identificacao = $request->identificacao;
            $usuario->nome = $request->nome;
            $update = $usuario->save();

            if($update == true){
                echo json_encode(["Message" => "Editado com sucesso"]);
            }else {
                echo json_encode(["Message" => "Erro na edição, tente novamente"]);
            }
        }
    }

    public function MostrarUsuario(){
        $usuario = User::find($this->id_logged());
        return $usuario;
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
