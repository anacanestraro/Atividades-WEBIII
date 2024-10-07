<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function homePage(){
        return view('homePage');
    }

    public function tabuadaTematica(){
        return view('tabuadaTematica');
    }

    public function exercicio1(){

        $num = [2,4,200,8];

        return view('exercicio1', compact('num'));
    }

    public function exercicio2(){

        $nums = [2,9];
        return view('exercicio2', compact('nums'));
    }

    public function exercicio3(){
        $ID = 1;
        $horasTrabalhadas = 80;
        $salario = 0;
        $excesso = 0;

        return view('exercicio3', [
            'ID' => $ID,
            'horasTrabalhadas' => $horasTrabalhadas,
            'salario' => $salario,
            'excesso' => $excesso
        ]);
    }

    public function exercicio4(){

        $indice = 0.3;

        return view('exercicio4', compact('indice'));
    }

    public function exercicio5(){

        $idade = 13;

        return view('exercicio5', compact('idade'));
    }

    public function exercicio6(){
        return view('exercicio6');
    }

    public function exercicio7(){

        $arr = [];
        for($i=0;$i<500;$i++){
            $arr[$i] = rand(1,1000);
        }

        function maiorValor($arr){
            sort($arr);
            $lengthArr = count($arr);
            return $arr[$lengthArr - 1];;
        }

        $maiorValor = maiorValor($arr);

        return view('exercicio7', compact('arr', 'maiorValor'));
    }

    public function exercicio8(){

        $var1 = "Olá";
        $var2 = "Mundo!";

        return view('exercicio8', compact('var1', 'var2'));
    }

    public function exercicio9(){

        $nomes = ['Ana', 'Maria', 'João', 'Mariana', 'Alice'];
        
        return view('exercicio9', compact('nomes'));
    }

    public function exercicio10(){

        $arr = range(1,20);
        $res=0;

        return view('exercicio10', compact('arr', 'res'));
    }

    public function exercicio11(){
        
        $nome = "ana";
        $nome2 = "ana luiza";

        return view('exercicio11', compact('nome', 'nome2'));
    }
}   


