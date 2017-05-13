<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function real(){
    	return view('menu.real');
    }


    public function premios(){
    	return view('menu.premios');

    }

    public function convenios(){
    	return view('menu.convenios');

    }

    public function parceiros(){
    	return view('menu.parceiros');

    }
    public function duvidas(){
    	return view('menu.duvida');

    }
    public function fale(){
    	return view('menu.fale');

    }
    public function resolve(){
    	return view('menu.resolve');

    }


}
