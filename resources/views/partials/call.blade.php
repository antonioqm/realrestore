{{-- BOTÃO --}}
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-6 btn-maissocial-rc">
    <a href="#" data-toggle="modal" data-target="#WeCallYou">
        <img src="{{ asset('img/icon_phone.svg') }}" alt="">
        <p>Ligamos para você</p>
    </a>
</div>

{{-- MODAL --}}
<div id="WeCallYou" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">

    <div class="container-call">
    	<a class="call-close-button" data-dismiss="modal" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
    	</a>
		<div class="container-form-call call-mask col-md-12">
		<h1 class="title-call">Ligamos para você</h1>
			{{-- FORM --}}
			<form id="formCall" class="form-horizontal form-call col-md-12" role="form" method="POST" action="{{ route('mailCall') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label control-label-call">Nome</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control form-call" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-12 control-label control-label-call">Telefone</label>

                            <div class="col-md-12">
                                <input data-fv-phone-message  id="tel" type="text" class="form-control form-call" name="tel" required>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                           
                            <label for="messenger"  class="col-md-12 control-label control-label-call">Mensagem</label>

                            <div class="col-md-12">
                                <textarea cols="40" rows="1" id="messenger"  class="form-control form-call" name="messenger" required></textarea>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('messenger') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-call-send">
                                    Enviar
                                </button>
                            </div>
                        </div>
                        
                    </form>
			{{-- FIM FORM --}}
		</div>
{{--         <div class="col-md-12 call-phones">
            Olá
        </div> --}}
    	
    </div>
  </div>{{-- /.modal-dialog --}}
</div>{{-- /.modal --}}