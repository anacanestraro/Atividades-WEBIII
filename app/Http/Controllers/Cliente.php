<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }

    public function store(Request $request){
        $status = ClienteModel::salvar($request);

        if($status){
            return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        }else{
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar o cliente. Tente novamente.');
        }
    }

    public function index(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index' , compact('clientes'));
    }

    public function destroy($id){
        $status = ClienteModel::deletar($id);

        if($status){
            return redirect('listarCliente')->with('mensagem', 'Cliente deletado com sucesso!');
        }else{
            return redirect('listarCliente')->with('mensagem', 'Erro ao deletar o cliente. Tente novamente.');
        }
    }
}
