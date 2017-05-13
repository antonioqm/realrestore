        <div class="container-fluid container-search-fluid-rc">
            <div class="container container-search-rc">
                <div class="row">
                    <div class="col-md-3 logo-rc">
                        <a class="hvr-grow" href="{{ url('/') }}">
                            {{-- {{ config('app.name', 'Laravel') }} --}}
                            {{-- @include('partials.logo') --}}
                            <img src="/img/real_convenios.svg" alt="Real Convênios">
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-8 search-rc">
                        <form class="form-horizontal" role="search" method="get" action="{{ url('guia_medico/credenciado') }}">
                          <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xl-9 col-xs-9 input-search-rc">
                                <input value=""  name="nome"  type="text" class="form-control" placeholder="Profissional ou Especialidade">
                            </div>
                            <div class="col-md-3 col-sm-3 col-xl-3 col-xs-3 btn-search-rc">
                                <button type="submit" class="btn btn-default col-md-12 col-sm-12 col-xl-12 col-xs-12"></button>
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 border-sepation-rc ">
                        
                    </div>
                    @include('partials.call')
                </div>                    
            </div>
        </div>