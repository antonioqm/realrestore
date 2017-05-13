@extends('admin.app')

@section('content')


@include('admin.partials.error')
<section class="section" style="background-color: #ffeb3b;">
<div class="modal is-active">
<form @submit.prevent="onSubmit">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Novo Credenciado</p>
      <a class="delete"></a>
    </header>
    <section class="modal-card-body" style="padding: 40px;">

      {{-- INICIO FORM  --}}
      <h1 class="title">Profissional ou Estabelecimento</h1> 
      <hr>
      
       
          <div>
    

           {{-- nome e PRonome--}}
          <div class="field is-horizontal" style="padding-top: 20px;">
          {{-- <multiselect></multiselect> --}}
            <div class="field-body">
            <div class="field has-addons">
            <p class="control">
            <label class="label is-small" >Pronome</label>
              <span class="select" >
                <select v-model="professional.pt" name="pt"
                @input="$v.professional.pt.$touch()"
               :class="[{'is-danger': $v.professional.pt.$error},{'is-success': !$v.professional.$error && $v.professional.pt.$dirty}]" v-model="professional.pt" name="pt" class="input" type="text" placeholder="nome">
                  <option value="null">Nenhum</option>
                  <option value="DRA">DRA</option>
                  <option value="DR">DR</option>
                </select>
              </span>
            </p>
            <p class="control is-expanded">
            <label class="label is-small">Nome</label>
              <input
                @input="$v.professional.name.$touch()"
               :class="[{'is-danger': $v.professional.name.$error | !$v.professional.name.minLength},{'is-success': !$v.professional.$error && $v.professional.name.$dirty}]" v-model="professional.name" name="name" class="input" type="text" placeholder="nome">
            </p>
            {{-- Registro --}}
              <div class="field is-narrow">
              <label class="label is-small">Registro</label>
                <p class="control is-expanded">
                  <input class="input"  v-model="professional.register" type="text" placeholder="Registro">
                </p>
              </div>
          </div>

            </div>
          </div>
          {{-- mensagem de PRONOME--}}
                  <span v-if="(!$v.professional.name.required && $v.professional.pt.$dirty)" class="help is-danger">O Telefone é obrigatório</span>
          {{-- mensagem de NOME --}}
                  <span v-if="(!$v.professional.name.required && $v.professional.name.$dirty)" class="help is-danger">O Telefone é obrigatório</span>
                  <p class="help is-danger" v-if="!$v.professional.name.minLength">O Telefone deve ter pelo menos @{{ $v.professional.name.$params.minLength.min}} caracteres.</p>

          {{-- É doutor --}}
          <div class="field is-expanded">
          <div class="box" style="margin:40px 0px;">
            <div class="field-body">
              <div class="field">
              <label class="label">É Doutor</label>
                <div class="control">
                  <label class="radio">
                    <input v-model="professional.doctor" value="S" type="radio" name="doctor">
                    Sim
                  </label>
                  <label class="radio">
                    <input v-model="professional.doctor" value="N" type="radio" name="doctor">
                    Não
                  </label>
                </div>
              </div>
              {{-- Sexo --}}

              <div class="field">
              <label class="label">Sexo</label>
                <div class="control">
                  <label class="radio">
                    <input  v-model="professional.sex" value="F" type="radio" name="sex">
                    Feminino
                  </label>
                  <label class="radio">
                    <input v-model="professional.sex" value="M" type="radio" name="sex">
                    Masculino
                  </label>
                </div>
              </div>
                  {{-- Pessoa --}}

              <div class="field">
              <label class="label">Pessoa</label>
                <div class="control">
                  <label class="radio">
                    <input v-model="professional.type" value="PF" type="radio" name="type">
                    Física
                  </label>
                  <label class="radio">
                    <input v-model="professional.type" value="PJ" type="radio" name="type">
                    Jurídica
                  </label>
                </div>
              </div>
            </div>
          </div>
          </div> {{-- FIM BOX --}}

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
              <label class="label is-small">Palavra-chave</label>
                <div class="control">
                  <input v-model="professional.key_words" class="input" name="key_words" type="text" placeholder="joão, jão, juão...">
                </div>
              </div>
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
              <label class="label">Especialidade que atende e ou Procedimento que realiza </label>
                <div class="control">
                  <input v-model="professional.metts" class="input" placeholder="Raio-X, Ultrassonografia...">
                </div>
              </div>
            </div>
          </div>
        <h1 style="margin-top: 30px;" class="title">Especialidades e Área de Atendimento</h1> 
        <hr>
          <select-state> </select-state>

        <hr>
        <h1 style="margin-top: 30px;" class="title">Endereço de Atendimento</h1> 
        <hr>
        {{-- Iníecio Endereçø --}}
        <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
              <label class="label">Clínica</label>
                <div class="control">
                  <input v-model="address.clinic" name="clinic" class="input" placeholder="Clínica Médica">
                </div>
              </div>
            </div>
          </div>
        {{-- Logradouro e Endereçø--}}
          <div class="field is-horizontal" >
            <div class="field-body">
            <div class="field has-addons">
            <p class="control" style="width: 20%; min-width: 103px;">
            <label class="label is-small" >Logradouro</label>
              <input v-model="address.thoroughfare" class="input" type="text" placeholder="Logradouro" name="thoroughfare">
            </p>
            <p class="control is-expanded">
            <label class="label is-small">Endereço</label>
              <input v-model="address.address" name="address" class="input" type="text" placeholder="Endereço">
            </p>
          </div>

            </div>
          </div>
          {{-- Fim LOgradouro e endereço --}}

          {{-- Início bairro e Complemento --}}
          <div class="field is-horizontal" >
            <div class="field-body">
            <div class="field has-addons">
            <p class="control" style="width: 50%;">
            <label class="label is-small" >Bairro</label>
              <input v-model="address.district" class="input" type="text" name="Bairro" placeholder="Bairro">
            </p>
              <div class="field">
              <label class="label is-small">Complemento</label>
                <p class="control">
                  <input class="input" v-model="address.complement" type="text" placeholder="Complemento">
                </p>
              </div>
          </div>

            </div>
          </div>
          {{-- FIM bairro e Complemento --}}
        <h1 style="margin-top: 30px;" class="title">Telefones de Contato</h1> 
        <hr>
           <phone></phone>
        <hr>


    


      {{-- FIM FORM ... --}}
    </section>
    <footer class="modal-card-foot">
      <button @click="$v.$touch" :disabled="$v.$invalid" class="button is-info">Salvar</button>
      <a class="button">Cancelar</a>
    </footer>
  </div>
  </form>
</div>
    
    </section>

   
@endsection