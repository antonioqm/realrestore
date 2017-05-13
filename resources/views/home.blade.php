@extends('layouts.app')
{{-- titulo da página --}}
@section('title', 'Início')
{{-- FIM titulo da página --}}

@section('content')
{{-- <div>@{{nome}}</div> --}}
{{-- <example></example> --}}
<div class="container container-content-rc">
    <div class="row " >
      {{-- Erros --}}
      @if ($message = Session::get('success')) 
      <div style="
      
      font-size: 18px;
      text-align: center;
      font-weight: 600;
      text-transform: uppercase;"

      class="alert alert-success alert-dismissable fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <p>{{ $message }}</p>
  </div>

  
  @endif
  {{-- Erros FIM --}}
  <div class="col-md-11">
    <div class="panel panel-default panel-news-rc">
        <div class="panel-body marquee">
            <span class="panel-news-title-rc">NOVIDADES</span>
            <a href="{{ action('GuiaMedicoController@guideMedical', ['nome' => 'MAGSCAN - CLÍNICA DE IMAGENOLOGIA']) }}">
                <span>Firmamos parceria com a Clínica Magescan, em Manaus-AM, especializada em Cardiologia, Ortopedia, Densitometria Óssea, Duplex Scan, Mamografia Digital, Ressonância Magnética, Tomografia Computadorizada e Ultrassonografia.</span>
            </a>
            

        </div>
    </div>
</div>
<div class="col-md-1 container-social-rc" style="padding-left: 0;">
    <a class="icon-instagran-rc" href="https://www.instagram.com/realconvenios/">


        <i class="fa fa-instagram"></i>
    </a>
    <a class="icon-facebook-rc" href="https://www.facebook.com/realconveniosAC/">
        <i class="fa fa-facebook-square"></i>
    </a>
</div>  
{{-- Guia do usuário --}}
<div class="col-md-3 col-sm-4 col-md-offset-0">
    <div class="panel panel-default panel-guia-rc ">

        <div class="panel-body panel-body-guia-rc">
            <img  src="{{ asset('/img/guia-real.png') }}">
        </div>
        <div class="panel-footer panel-footer-guia-rc">
            <span id="download-guia-rc">download</span>
            <a class="btn-guia-rc" href="{{ asset('pdf/guia_do_usuario_real_convenios.pdf') }}">
                Guia Médico Completo</a>
            </div>
        </div>
    </div>
    @include('partials.carousel')


</div>
<div class="row" style="padding-top: 50px;">
    <div class="col-md-6 col-xs-12 container-btn-balls">
        <div class="col-md-6 col-sm-6 col-xs-6 item-btn-balls">
            <a href="{{ route('convenios') }}" class="btn-balls-rc">
                <span class="">Convênios
                    <img src="../img/cartao-de-convenios-real.png" alt="">
                </span>
                
            </a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 item-btn-balls">
            <a href="{{ route('premios') }}" class="btn-balls-rc">
                <span class="">Prêmios
                    <img src="../img/premios.png" alt="">
                </span>
                
            </a>
        </div>
    </div>
    <div class="border-sepation-content-rc col-md-1 hidden-xs hidden-ms">
        
    </div>
    <div class="col-md-5 col-xs-12">
        <a class="dicas-rc" href="#">
            <div>
                <p>
                    <span>Dica de</span> Saúde
                </p>
                
            </div>
        </a>
        
        <ul class="list-group dicas-list-group-rc">
            <li class="list-group-item dicas-item-rc" ><a href="http://maisdoutor.com/exibir/79-Pilates--saiba-tudo-sobre-os-diferentes-metodos-do-exercicio-e-veja-o-mais-eficaz-.aspx" target="_blank"><span></span>Pilates: saiba tudo sobre os diferentes métodos do exercício e veja o mais eficaz!</a></li>
            <li class="list-group-item dicas-item-rc" ><a href="http://maisdoutor.com/exibir/83-Carne-liberada--livro-aposta-em--dieta-das-cavernas--para-emagrecer.aspx" target="_blank"><span></span>Carne liberada: livro aposta em 'dieta das cavernas' para emagrecer</a></li>
            <li class="list-group-item dicas-item-rc" ><a href="http://maisdoutor.com/exibir/64-Na-dietoterapia-chinesa,-cada-sabor-tem-uma-funcao-para-o-organismo.aspx" target="_blank"><span></span>Na dietoterapia chinesa, cada sabor tem uma função para o organismo</a></li>
        </ul>
    </div>
    
    
</div>
<div id="resolva" class="row" style="padding-top: 50px;">
    <div class="col-md-12">
        <h1>Resolva Online</h1>
    </div>
    <div class="col-md-12  container-btn-resolva-rc">
        <div class="col-sm-3 col-xs-6 box-btn-resolva-rc"><a href="{{ route('fale') }}" class="btn-resolva-visita-rc btn-resolva-rc"><h3>Visita</h3><p>Solicite a visita de um consultor</p></a></div>
        <div class="col-sm-3 col-xs-6 box-btn-resolva-rc"><a href="#" class="btn-resolva-cartao-rc btn-resolva-rc"><h3>Cartão</h3><p>Emissão de  2ª via do Cartão do usuário</p></a></div>
        <div class="col-sm-3 col-xs-6 box-btn-resolva-rc"><a href="#" class="btn-resolva-cadastro-rc btn-resolva-rc"><h3>Cadastro</h3><p>Atualize seu endereço e telefone</p></a></div>
        <div class="col-sm-3 col-xs-6 box-btn-resolva-rc"><a href="#" class="btn-resolva-guiamedico-rc btn-resolva-rc"><h3>Guia Médico</h3><p>Baixe o guia médico completo online</p></a></div>
    </div>
</div>

</div> {{-- Fim Container --}}

@endsection

