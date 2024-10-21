<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista1 extends Controller
{
    public function lista1(){
        return view('Lista1.lista1');
    }

    public function exercicio1(){

        $num = [2,4,200,8];

        return view('Lista1.exercicio1', compact('num'));
    }

    public function exercicio2(){

        $nums = [2,9];
        return view('Lista1.exercicio2', compact('nums'));
    }

    public function exercicio3(){
        $ID = 1;
        $horasTrabalhadas = 80;
        $salario = 0;
        $excesso = 0;

        return view('Lista1.exercicio3', [
            'ID' => $ID,
            'horasTrabalhadas' => $horasTrabalhadas,
            'salario' => $salario,
            'excesso' => $excesso
        ]);
    }

    public function exercicio4(){

        $indice = 0.3;

        return view('Lista1.exercicio4', compact('indice'));
    }

    public function exercicio5(){

        $idade = 13;

        return view('Lista1.exercicio5', compact('idade'));
    }

    public function exercicio6(){
        return view('Lista1.exercicio6');
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

        return view('Lista1.exercicio7', compact('arr', 'maiorValor'));
    }

    public function exercicio8(){

        $var1 = "Olá";
        $var2 = "Mundo!";

        return view('Lista1.exercicio8', compact('var1', 'var2'));
    }

    public function exercicio9(){

        $nomes = ['Ana', 'Maria', 'João', 'Mariana', 'Alice'];
        
        return view('Lista1.exercicio9', compact('nomes'));
    }

    public function exercicio10(){

        $arr = range(1,20);
        $res=0;

        return view('Lista1.exercicio10', compact('arr', 'res'));
    }

    public function exercicio11(){
        
        $nome = "ana";
        $nome2 = "ana luiza";

        return view('Lista1.exercicio11', compact('nome', 'nome2'));
    }
}
