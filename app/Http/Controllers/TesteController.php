<?php

namespace App\Http\Controllers;

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

}   


