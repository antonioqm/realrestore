@extends('layouts.app')
{{-- titulo da página --}}
@section('title', 'Fale Conosco')
{{-- FIM titulo da página --}}
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Fale Conosco</h1>
				<hr>
     {{-- Erros --}}
    @if ($message = Session::get('success'))
        <div style="
        
        font-size: 18px;
        text-align: center;
        font-weight: 600;
        text-transform: uppercase;"

        class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
      {{-- Erros FIM --}} 
				{{-- formulário --}}
				<div class="container-parceiro col-md-12">
				<form id="contactForm" class="form-horizontal"method="POST" action="{{ route('mailFale') }}">
                        {{ csrf_field() }}
    <div class="form-group">
        <label class="col-xs-4 control-label">Nome Completo</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="firstName" placeholder="Nome" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 control-label">Número de Telefone</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="phoneNumber" placeholder="(68) 99999-9999" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 control-label">Email</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="email" placeholder="Email" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-4 control-label">Mensagem</label>
        <div class="col-xs-5">
            <textarea class="form-control" name="textmessage" rows="7" placeholder="Mensagem"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-4">
            <button  type="submit" class="btn btn-primary col-xs-3">Enviar</button>
        </div>
    </div>
</form>
</div>


				{{-- formulário --}}

			</div>
		</div>
	</div>
@endsection
