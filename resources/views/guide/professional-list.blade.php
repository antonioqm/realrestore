@extends('admin.app')

@section('content')

        {{-- Erros --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
      <section class="section professional-section">
      <div class="container">
        <div class="columns is-multiline">
          
              {{-- BOX profissional --}}

                <professional-card v-for="professional in professionals" :key="professional.id">
                  <template slot="professional" >@{{professional.name}}</template>
                  <template slot="register" >@{{professional.register}}</template>
                  <template slot="sex" >
                    <img  v-if="professional.sex === 'M'" src="{{ asset('img/admin/m.png') }}">
                    <img  v-else-if="professional.sex === 'F'" src="{{ asset('img/admin/f.png') }}">
                    <img  v-else src="{{ asset('img/admin/e.png') }}">
                  </template>
                  <template slot="type" >Tipo: @{{professional.type}}</template>
                  <template slot="doctor" >Doutor: @{{professional.doctor}}</template>
                  <template slot="pt" >@{{professional.pt}} </template>
                  <template slot="address" >
                  <small style="text-transform: uppercase;" v-for="address in professional.addresses">
                    @{{address.thoroughfare}} @{{address.address}} - @{{address.district}} - @{{address.city.name}} / @{{address.city.state.uf}}
                  </small>
                  </template>
                  {{-- <template slot="metts" >Especialidade e Procedimentos: @{{professional.metts}}</template> --}}
                  <template slot="specialties">
                    <div v-for="specialty in professional.specialties">
                        <a>#@{{specialty.name}} </a>
                    </div >
                  </template>
                  {{-- <template slot="specialties" >Especialidade e Procedimentos: @{{professional.specialties}}</template> --}}
                  <template slot="key_words" >Palavras-chave: @{{professional.key_words}}</template>
                </professional-card>

              {{-- BOX profissional --}}
           
          </div>
        </div>
      </section>
          {{-- level INIT--}}
<section class="section">
      <div class="container">
        <nav class="level">
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Profissionais</p>
              <p class="title">698</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Estabelecimentos</p>
              <p class="title">123</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Especialidades</p>
              <p class="title">89</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Estados</p>
              <p class="title">7</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Cidades</p>
              <p class="title">25</p>
            </div>
          </div>
        </nav>
      </div>
    </section>
    {{-- level END--}}


@endsection