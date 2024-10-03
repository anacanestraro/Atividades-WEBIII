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

        return view('exercicio3', compact('ID', 'horasTrabalhadas', 'salario'));
    }

    public function exercicio4(){
        return view('exercicio4');
    }
}
