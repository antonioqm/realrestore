@extends('layouts.app')
{{-- titulo da página --}}
@section('title', 'Guia do Usuário - Cidades')
{{-- FIM titulo da página --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="panel-heading">
                        <h1>Guia Médico</h1>
            
                @foreach($cities as $city)
                    @foreach($city->specialties as $specialty)
                        @if($loop->count >= 1 && ($loop->first))
                          <h4>Sua busca retornou <span>{{$loop->count}}</span> Especialidade(s)</h4>
                        @elseif($loop->first)
                          <h4>Não encontramos nada, tente outra Especialidade</span> resultados</h4>
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
                                        <img src="{{ asset('/img/ac.jpg') }}" alt="">
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
                                        <div>Rondônia</div>
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

                        <span class="guide-card-list">{{$cities[0]->name}}</span>
                                <ul class="list-group-cities">
                                    @foreach($cities as $city)
                                        @foreach($city->specialties as $specialty)

                                            <li class="list-group-cities-item">
                                            <span class="guide-number-list">{{$loop->iteration}}</span>
                                                <a href="{{ route('specialty',
                                                    ['city' => $cities[0]->name,
                                                    'city_id' => $specialty->city_id,
                                                    'id' => $specialty->id,
                                                    'specialty' => $specialty->name
                                                    ]) }}">
                                                    {{$specialty->name}}
                                                </a>
                                            </li>
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

</div>


@endsection
