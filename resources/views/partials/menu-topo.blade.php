<nav class="navbar navbar-default navbar-static-top">
            <div class="container container-navbar-rc">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">

                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                  {{--   <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                </div>
                
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav ">
                        <li><a class="hvr-underline-from-center" href="{{ url('/') }}">Início</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('real') }}">A Real</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('premios') }}">Prêmios</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('convenios') }}">Convênios</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('parceiros') }}">Parceiros</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('state', ['name' => 'Acre']) }}">Guia Médico</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('duvidas') }}">Dúvidas</a></li>
                        <li><a class="hvr-underline-from-center" href="{{ route('fale') }}">Fale Conosco</a></li>
                        <li><a id="btn-resolva" class="hvr-underline-from-center" href="{{ url('/') }}#resolva">Resolva Online</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="nav navbar-nav navbar-right">
                       @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                        <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else


                        <li class="dropdown">

                            <a href="javascrpt::" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                
                              <img class="profile-image img-circle img-avatar " 
                                @if (Auth::user()->avatar)
                                    src= {{ asset('uploads/avatars/'.Auth::user()->avatar)}} >
                                @else
                                    {{ isset(Auth::user()->socialAccount->avatar) ? 'src='.Auth::user()->socialAccount->avatar : 'src='.asset('img/user_default.png') }}>
                                 @endif


                                 {{ Auth::user()->name }}

                                 <span class="caret"></span>
                            </a>
    
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('donor') }}"><i style="padding-right: 11px; font-size: 16px;" class="fa fa-cog "></i>Minha Conta</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url('admin#/objects') }}"><i style="padding-right: 11px; font-size: 16px;" class="fa fa-gift"></i>Meus Objetos</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i style="padding-right: 11px; font-size: 16px;" class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul> --}}
                </div>
            </div>
        </nav>