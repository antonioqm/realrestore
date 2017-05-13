<footer class="container-fluid container-fluid-footer-rc">
        <div class="container container-content-rc ">
            <div class="row container-footer-rc">
                <nav class="navbar navbar-default navbar-static-top navbar-footer-rc">
            <div class="container container-navbar-rc">
                
                
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav" style="width: auto !important; left: 0; padding: 0 20px !important;">
                        <li><a class="" href="{{ url('/') }}">Início</a></li>
                        <li><a class="" href="{{ route('real') }}">A Real</a></li>
                        <li><a class="" href="{{ route('premios') }}">Prêmios</a></li>
                        <li><a class="" href="{{ route('convenios') }}">Convênios</a></li>
                        <li><a class="" href="{{ route('parceiros') }}">Parceiros</a></li>
                        <li><a class="" href="{{ route('state', ['name' => 'Acre']) }}">Guia Médico</a></li>
                        <li><a class="" href="{{ route('duvidas') }}">Dúvidas</a></li>
                        <li><a class="" href="{{ route('fale') }}">Fale Conosco</a></li>
                        <li><a id="resolve" class="" href="{{ url('/') }}#resolva">Resolva Online</a></li>
                    </ul>


                                        <!-- Left Side Of Navbar -->
             

                    <!-- Right Side Of Navbar -->
               
            </div>
        </nav>
            </div>
            <div class="row container-data-footer-rc">
                <div class="col-md-2 col-xs-12 logo-footer-rc">
                    <img width="130" src="{{ asset('../img/real_convenios.svg') }}" alt="">
                </div>
                <div class="container-address-rc col-md-10 col-xs-12 ">
                    <p class="name">Real Convênios</p>
                    <p class="address">Av. Nações Unidas, 151 - Bosque - Rio Branco - Acre -  Brasil
                    </p>
                    <p class="phone"><a href="tel:tel:+556832231011">Fale conosco: <span class="ddd">68</span> 3223-1011</a><br><a href="tel:+5568999847320">Whatsapp: <span class="ddd">68</span> 99984-7320</a></p>
                    <p class="phone"><a href="mailto:contato@realconvenios.com.br">contato@realconvenios.com.br</a></p>
                    {{-- <p class="cnpj">CNPJ: 02.354.015/0001-83</p> --}}
                    
                </div>
            </div>
            <p class="pull-right">© Copyright 2010-2017 Real Convênios</p>
        </div>
    </foote>