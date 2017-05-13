@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="panel-heading">
                    <h1>Guia Médico</h1>
                    <h4>Resultado da busca por: <span>{{$term}}</span></h4>
                    
                </div>
                <div class="panel-body">
         
                @foreach($registereds as $registered)
                    <div class="col-md-12 guide-card-container">
                        <div class="guide-card-sub-container guide-card-sub-container-left">
                            <div class="guide-card-photo-perfile">
                                <div class="guide-card-icon-profile guide-card-sprite"
                                {{-- verifica o sexo do credenciado para exibir o icone correspondente --}}
                                    style="@if($registered->sex == 'M')
                                                {{'background-position: 0px 10px;'}}
                                            @elseif($registered->sex == 'F')
                                                {{'background-position: 0px -83px;'}}
                                            @else
                                                {{'background-position: 0px -183px;'}}
                                            @endif   
                                ">
                                    
                                </div>
                                {{-- Name --}}
                                <h1 class="guide-card-name">
                                <a href="">
                                    @if(!empty($registered->pt))
                                        
                                    {{$registered->pt.'. '}}
                                        
                                    @endif
                                    {{$registered->name}}
                                </a>
                                </h1>
                                <p class="guide-card-rgister">{{$registered->register}}</p>
                            </div>
                        </div>
                        <div class="guide-card-sub-container guide-card-sub-container-right">
                                
                            <div class="guide-card-container-specialties">
                                <div class="guide-card-item guide-card-sprite"></div>
                                <div class="guide-card-container-sub-specialties">
                                    <span class="guide-card-label">ESPECIALIDADES | ÁREAS DE ATUAÇÃO</span>


                                    @if($registered->specialties_count == 1)
                                       <h2 class="guide-card-spacialties"><a class="btn-sm btn-specialty" role="button" data-toggle="collapse" href="#collapseGuide{{$loop->iteration}}" aria-expanded="false" aria-controls="collapseGuide" href="#"><span>{{$registered->specialties[0]->name}}</span></a></h2>
                                    @else
                                        @foreach($registered->specialties as $specialty)
                                       <h2 class="guide-card-spacialties"><a href="#"><span>{{$specialty->name}}</span></a></h2>
                                        @endforeach
                                    @endif
                                    @if($registered->specialties_count == 1 && !empty($registered->specialties[0]->description))
                                    {{-- ACCORDION INICIO --}}
                                    <div class="collapse" id="collapseGuide{{$loop->iteration}}">
                                      <div class="well well-specialty">
                                        {{$registered->specialties[0]->description}}
                                      </div>
                                    </div>
                                    {{-- ACCORDION FIM --}}
                                    @endif
                              




                                </div>
                            </div>
                            <div class="guide-card-container-address">
                                @if(!empty($registered->metts))
                                    <p class="guide-card-metts">{{$registered->metts}}</p>
                                @endif
                                @foreach($registered->addresses as $address)
                                    @if(!empty($address->clinic))
                                        <p style="text-transform: uppercase;" ><i class="material-icons">place</i>{{ $address->clinic}}</p>
                                        @if(!empty($address->thoroughfare))
                                        <p style="text-transform: uppercase;" >{{ $address->thoroughfare.' '.$address->address.' - '.$address->district}}</p>
                                        @endif
                                    @else
                                        <p><i class="material-icons">place</i>{{ $address->thoroughfare.' '.$address->address.' - '.$address->district}}</p>

                                    @endif
                                    {{-- Comentado devido o os relacionamento de cidades com especialidades não estarei deveidamente relacionados --}}
                                    <p style="text-transform: uppercase;" >{{ $address->city->name.' | '.$address->city->state->uf }}</p>
                                @endforeach
                            </div>

                            <div class="guide-card-container-phone">
                                
                                    <div class="guide-card-phone-fix">
                                    
                                        @foreach($registered->phones as $phone)
                                            @if($phone->type == 'fix')
                                                <p><i class="material-icons">phone</i><span><a href="tel:{{$phone->ddd}}"></a> {{$phone->ddd}}. </span><a href="tel:{{$phone->number}}"></a>{{$phone->number}}</p>
                                            @endif                                   
                                        @endforeach
                                    </div>
                                
                                
                                    <div class="guide-card-phone-cell">
                                    
                                        @foreach($registered->phones as $phone)
                                            @if($phone->type == 'cell')
                                                <p><i class="material-icons">phone_iphone</i><span>{{$phone->ddd}}. </span>{{$phone->number}}</p>
                                            @endif                                   
                                        @endforeach
                                    </div>  
                                
                            </div>
                        </div>
                        <h1 class="guide-card-count">{{$loop->iteration}}</h1> 

                    </div>
        
                @endforeach
    
        </div>
        <div class="pagination-guide">

          {!!$registereds->links('vendor.pagination.default') !!}
        </div>

        
    </div>

</div>
{{--         <div class="container">
            
            <div class="row">
                <div class="text-center col-md-12" >
                   <div class="pagination-container"> <small class="text-muted"> {{ $objects->render() }}</small></div>
                </div>
    
            </div>
        </div> --}}

@endsection
