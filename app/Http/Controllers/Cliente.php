<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }

    public function store(Request $request){
        $status = DB::table('clientes')->insert([
            'nome'=>$request->input('nome'),
            'cpf'=>$request->input('cpf'),
            'telefone'=>$request->input('telefone'),
            'email'=>$request->input('email'),
        ]);

        if($status){
            return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        }else{
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar o cliente. Tente novamente.');
        }
    }
}
