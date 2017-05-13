@extends('admin.app')

@section('content')

        {{-- Erros --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
      <section class="section professional-section">
    {{--  --}}
      <div class="container">
        <div class="columns is-multiline">
          
              {{-- TABELA --}}

                <table class="table">
  <thead>
  <caption><div class="container">
                <div class="level" style="height: 105px;">
                  <div class="level-left">
                    

                  </div>
                  <div class="level-rigth">
                    <p class="field">
                      <a class="button is-success">
                        <span>Adicionar</span>
                        <span class="icon is-small">
                          <i class="fa fa-plus"></i>
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
                </div></caption>
    <tr>
      <th><abbr title="Identificador Único">ID</abbr></th>
      <th title="Nome">Nome</th>
      <th><abbr title="Sexo">S</abbr></th>
      <th><abbr title="Especialidades">Especialidade(s)</abbr></th>
      <th><abbr title="Cidade">Cidade</abbr></th>
      <th><abbr title="Estado">Estado</abbr></th>
      <th><abbr title="Ações">Ações</abbr></th>
    </tr>
  </thead>
  <tfoot>
{{--     <tr>
      <th><abbr title="Position">Pos</abbr></th>
      <th>Team</th>
      <th><abbr title="Played">Pld</abbr></th>
      <th><abbr title="Won">W</abbr></th>
      <th><abbr title="Drawn">D</abbr></th>
      <th><abbr title="Lost">L</abbr></th>
    </tr> --}}
  </tfoot>
  <tbody>
{{-- @foreach($professionals as $professional) --}}
    <tr>
      <th>
      {{-- {{$professional->id}} --}}
      </th>
      <td>
          <a style="text-transform: uppercase;" class="is-info" href="#">
           {{-- {{($professional->pt <> null) ? $professional->pt . '.' : ''}} {{$professional->name}} --}}
          </a>
      </td>
      <td>
{{--         @if($professional->sex == 'M')
          <span class="icon"><i style="color: #64b5f6" class="fa fa-male"></i></span>
        @elseif($professional->sex == 'F')
          <span class="icon"><i style="color: #ff839c" class="fa fa-female"></i></span>
        @else
          <span class="icon"><i style="color: rgba(0, 0, 0, .3)" class="fa fa-hospital-o"></i></span>
        @endif --}}
          <span class="icon"><i style="color: rgba(0, 0, 0, .3)" class="fa fa-hospital-o"></i></span>
      </td>
      <td>
      {{-- {{$professional->specialties}} --}}
{{--         @foreach($professional->specialties as $specialty)
          <span>{{!$loop->last ? (($loop->iteration + 1) == $loop->count ? $specialty->name : $specialty->name .', '): (($loop->count > 1) ? ('e '. $specialty->name) : $specialty->name)}}</span>
        @endforeach --}}
      </td>
      <td>
{{--         @foreach($professional->addresses as $address)
            {{$address->city->name}}
        @endforeach --}}
      </td>
      <td>
{{--       @foreach($professional->addresses as $address)
              {{$address->city->state->uf}}
        @endforeach --}}
      </td>
      <td>
        <div class="block">
        <a class="button is-info is-small">
          <span class="icon is-small">
            <i class="fa fa-pencil"></i>
          </span>
          </a>
          <a class="button is-danger is-small">
          <span class="icon is-small">
            <i class="fa fa-times"></i>
          </span>
          </a>
        </div>
      </td>
    </tr>
  {{-- @endforeach --}}
  </tbody>
</table>
 <div class="container">
  {{-- {{ $professionals->links() }} --}}
 </div>
              {{-- TABELA --}}
          </div>
        </div>
      </section>
{{-- Seção --}}
  <section class="section">
    <div class="container">
      <div class="heading">
        <h1 class="title has-text-centered">Alguns Números</h1>
{{--         <h2 class="subtitle has-text-centered">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
        </h2> --}}
      </div>
    </div>
  </section>
  {{-- <hr> --}}
{{-- level INIT--}}
<section class="section">
      <div class="container">
        <nav class="level">
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Credenciados</p>
              <p class="title">
              {{-- {{$countAccredited}} --}}
              </p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Profissionais</p>
              <p class="title">
              {{-- {{$countPF}} --}}
              </p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Estabelecimentos</p>
              <p class="title">
              {{-- {{$countPJ}} --}}
              </p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Estados</p>
              <p class="title">
              {{-- {{$countState}} --}}
              </p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Cidades</p>
              <p class="title">
              {{-- {{$countCity}} --}}
              </p>
            </div>
          </div>
        </nav>
      </div>
     
    </section>
    {{-- level END--}}


@endsection