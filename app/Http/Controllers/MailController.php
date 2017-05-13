<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function store(Request $request){
    	// dd($request->all());

    	Mail::send('mail.call',$request->all(), function($messenger){
            $messenger->from('contato@realconvenios.com.br', 'Ligamos para você');
            $messenger->to('contato@realconvenios.com.br', 'Contato Rela')->subject('Ligamos para Você');
        });
        Session::flash('messenger','Mensagem enviada corretamente');
        return Redirect::to('/')->with('success', 'Mensagem enviada com sucesso. Entraremos em contato com você em breve!');

    }

    public function fale(Request $request){
    	// dd($request->all());

    	Mail::send('mail.fale',$request->all(), function($messenger){
            $messenger->from('contato@realconvenios.com.br', 'Fale Conosco');
            $messenger->to('contato@realconvenios.com.br', 'Contato Real')->subject('Fale Conosco');
        });
        // Session::flash('messenger','Mensagem enviada corretamente');
        return  back()->with('success', 'Mensagem enviada com sucesso.');

    }
}
