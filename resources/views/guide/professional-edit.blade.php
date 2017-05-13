@extends('layouts.app')

@section('content')
<div class="container" style="text-transform: uppercase;">
  <div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading"> <h1 style="text-align: center;">Guia do Usuário</h1></div>
   <div class="panel-body">



  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      {{-- Erros --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      {{-- Erros FIM --}}
      {!! Form::model($professional, ['id'=>'formEditProfessional', 'class'=>'form-horizontal','method' => 'PATCH','route' => ['admin.professional.update', $professional->id]]) !!}

        <fieldset>
           <legend>Profissional</legend>
                              {{-- NOme do Profissional --}}
                        <div class="form-group">
                            <label for="specialty" class="col-md-4 control-label">Especialidades</label>

                            <div class="col-md-6">

                            {!!Form::select('specialty[]', $specialties, $professional->specialtiess,
                              [
                                'multiple' => true,
                                'class'=>'form-control chosen-select selectpicker',
                                'id'=>'first-disabled2',
                                'data-hide-disabled'=>'true',
                                'data-size'=>'5',
                                'required' => '',
                                'autofocus' => '',
                                'maxOptions' => '3',
                                'data-live-search' => 'true',
                                'data-actions-box' => 'false',
                                'data-live-search-placeholder' => 'Search',
                              ])
                            !!}

                            
                            </div>
                        </div>
              {{-- Fim --}}
        
                {{-- NOme do Profissional --}}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">

                                {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'name', 'required'=>'', 'autofocus'=>''])!!}


                            </div>
                        </div>
              {{-- Fim --}}
          
              {{-- Registro do Profissional --}}
                        <div class="form-group">
                            <label for="register" class="col-md-4 control-label">Registro Profissional</label>

                            <div class="col-md-6">
                                {!! Form::text('register', null, ['class' => 'form-control', 'id'=>'register', 'autofocus'=>''])!!}
                            </div>
                        </div>
            {{-- FIm --}}
        
            {{-- Área de atendimento --}}
                <div class="form-group">
                    {{-- <label for="register" class="col-md-4 control-label">Registro Profissional</label> --}}

                    {{ Form::label('Áreas de atendimento', null, ['class' => 'col-md-4 control-label']) }}
                    <div class="col-md-6">
                        {!! Form::textarea('metts', null, ['class' => 'form-control', 'id'=>'metts', 'autofocus'=>'','size' => '30x3'])!!}
                    </div>
                </div>
            {{-- FIm --}}

            {{-- Palavras Chaves --}}
                <div class="form-group">
                    {{-- <label for="register" class="col-md-4 control-label">Registro Profissional</label> --}}

                    {{ Form::label('Palavras-chave', null, ['class' => 'col-md-4 control-label']) }}
                    <div class="col-md-6">
                        {!! Form::textarea('key_words', null, ['class' => 'form-control', 'id'=>'key_words', 'autofocus'=>'','size' => '30x3'])!!}
                    </div>
                </div>
               </fieldset>
            {{-- FIm --}}
            {{-- #########################FIM PROFISSIONAL###################################### --}}

            {{-- #########################INICIO Telefone############################ --}}
            @foreach($professional->phones as $phone)
            <fieldset>
            <legend>Telefone {{$loop->iteration}}</legend>
            
            {{ Form::hidden('phone_id[]', $phone->id) }}
              {{-- telefone --}}
                        <div class="form-group">
                        {{-- DDD --}}
                            <label for="ddd" class="col-md-4 control-label">DDD</label>
                            
                            <div class="col-md-1">
                                {!! Form::text('ddd[]', $phone->ddd, ['class' => 'form-control', 'id'=>'ddd', 'autofocus'=>''])!!}
                            </div>
                       {{-- tipo de telefone --}}
                            <label for="type-number" class="col-md-1 control-label">Tipo</label>
                            
                            <div class="col-md-1">
                                {!! Form::text('type[]', $phone->type, ['class' => 'form-control', 'id'=>'type-number', 'autofocus'=>''])!!}
                            </div>

                        {{-- number --}}
                            <label for="number" class="col-md-1 control-label">Número</label>
                            
                            <div class="col-md-2">
                                {!! Form::text('number[]', $phone->number, ['class' => 'form-control', 'id'=>'number', 'autofocus'=>''])!!}
                            </div>
                            


                      </div>
          {{-- FIm telefone --}}

           </fieldset>
           @endforeach
            {{-- #########################FIM Telefone############################ --}}

            {{-- #########################INICIO ENDEREÇØ############################ --}}
            @foreach($professional->addresses as $address)
            {{ Form::hidden('address_id[]', $address->id) }}
            <fieldset>

           <legend>Endereço {{$loop->iteration}}</legend>
            {{-- Clínica --}}
                  <div class="form-group">
                            <label for="clinic" class="col-md-4 control-label">Clínica</label>
                            
                            <div class="col-md-6">
                                {!! Form::text('clinic[]', $address->clinic, ['class' => 'form-control', 'id'=>'clinic', 'autofocus'=>''])!!}
                            </div>
                  </div>
              {{-- Fim Clínica--}}

          {{-- LOgradouto --}}
                        <div class="form-group">
                            <label for="thoroughfare" class="col-md-4 control-label">Logradouro</label>
                            
                            <div class="col-md-1">
                                {!! Form::text('thoroughfare[]', $address->thoroughfare, ['class' => 'form-control', 'id'=>'thoroughfare', 'autofocus'=>''])!!}
                            </div>
          {{-- FIm LOgradouto --}}
                            
            {{-- Endereço --}}
                            <label for="address" class="col-md-1 control-label">Endereço</label>
                            
                            <div class="col-md-4">
                                {!! Form::text('address[]', $address->address, ['class' => 'form-control', 'id'=>'address', 'autofocus'=>''])!!}
                            </div>
                        </div>
              {{-- Fim Endereço--}}

              {{-- Bairro --}}
                  <div class="form-group">
                            <label for="district" class="col-md-4 control-label">Bairro</label>
                            
                            <div class="col-md-6">
                                {!! Form::text('district[]', $address->district, ['class' => 'form-control', 'id'=>'district', 'autofocus'=>''])!!}
                            </div>
                  </div>
              {{-- Fim Bairro--}}
                  {{-- Complemento --}}
                  <div class="form-group">
                            <label for="complement" class="col-md-4 control-label">Complemento</label>
                            
                            <div class="col-md-6">
                                {!! Form::text('complement[]', $address->complement, ['class' => 'form-control', 'id'=>'complement', 'autofocus'=>''])!!}
                            </div>
                  </div>
              {{-- Fim Complemento--}}


              </fieldset>
              @endforeach

            {{-- #########################FIM ENDEREÇØ############################ --}}

            {{-- Botão enviar --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              
                                {!! Form::submit('Atualizar', ['class'=>'btn btn-lg btn-primary col-md-12'])!!}
                            </div>
                        </div>
            {{-- FIM --}}
        {!! Form::close() !!}
    </div>
  </div> 

</div>
</div>
@endsection