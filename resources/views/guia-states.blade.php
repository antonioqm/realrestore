@extends('layouts.app')
{{-- titulo da página --}}
@section('title', 'Guia do Usuário - Estados')
{{-- FIM titulo da página --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="panel-heading">
                        <h1>Guia Médico</h1>
                @foreach($state as $stat)
                    @foreach($stat->cities as $city)
                        @if($loop->count >= 1 && ($loop->first))
                          <h4>Sua busca retornou <span>{{$loop->count}}</span> resultado(s)</h4>
                        @elseif($loop->first)
                          <h4>Não encontramos nada, tente outra Cidade ou Estado</span> resultados</h4>
                        @endif

                    @endforeach
                @endforeach
                                    </div>
                <div class="panel-body">


                    <div class="col-md-12  col-md-offset-0 guide-card-container-list ">
                        <div class="guide-card-sub-container states-map-guide-card-sub-container-left">
                            <span class="guide-card-list-title">Busca Por região</span>
                            <div class="container-flags-states">
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'Acre']) }}">
                                        <img src="{{ asset('/img/AC.jpg') }}" alt="">
                                        <div>Acre</div>
                                    </a>
                                </div>
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'Amazonas']) }}">
                                        <img src="{{ asset('/img/AM.jpg') }}" alt="">
                                        <div>Amazonas</div>
                                    </a>
                                </div>
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'Distrito Federal']) }}">
                                        <img src="{{ asset('/img/DF.jpg') }}" alt="">
                                        <div>Distrito Federal</div>
                                    </a>
                                </div>
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'Goiás']) }}">
                                        <img src="{{ asset('/img/GO.jpg') }}" alt="">
                                        <div>Goiás</div>
                                    </a>
                                </div>
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'Rondônia']) }}">
                                        <img src="{{ asset('/img/RO.jpg') }}" alt="">
                                        <div>Rondônias</div>
                                    </a>
                                </div>
                                <div class="states-flag">
                                    <a href="{{ route('state', ['name' => 'São Paulo']) }}">
                                        <img src="{{ asset('/img/SP.jpg') }}" alt="">
                                        <div>São Paulo</div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="guide-card-sub-container guide-card-sub-container-right">

                        <span class="guide-card-list">{{$state[0]->name}}</span>
                                <ul class="list-group-cities">
                                    @foreach($state as $state)
                                        @foreach($state->cities as $city)

                                            <li class="list-group-cities-item"><a href="{{ route('city', ['city' => $city->name,
                                                'id' => $city->id,
                                                'state' => $state->name
                                                ]) }}">{{$city->name}}</a></li>
                                        @endforeach
                                    @endforeach
                                </ul>

                        </div>
                    </div> 


        </div>
        <div class="pagination-guide">

        </div>

        
    </div>

</div>


@endsection
