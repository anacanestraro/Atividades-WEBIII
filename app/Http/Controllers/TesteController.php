<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function homePage(){
        return view('homePage');
    }

    public function navbar(){
        return view('layouts.navbar');
    }

    public function tabuadaTematica(){
        return view('tabuadaTematica');
    }

    public function index2(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index2' , compact('clientes'));
    }

}   


