<!DOCTYPE html>
<html lang="en">
    <!-- CSRF Token -->
        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script>
      window.onload = function () {
        console.log('carregou a página completa');
      }
    </script>

<head>
    <meta charset="UTF-8">
    <title>Admin — Real Convênios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css">
    <link rel="stylesheet" href="../../css/admin/admin-app.css">
</head>
<body>
    <div id="app">
            
    
        {{-- HERO --}}
          <section class="hero is-info is-medium">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item">
            {{-- <img src="images/bulma-type-white.png" alt="Logo"> --}}
            <img src="../../img/real_convenios.svg" alt="Real Convênios logo" style="height:230px; height: 40px;
    margin: 15px; max-height: 2.75rem;">
          </a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div class="nav-right nav-menu">
          <a href="{{ url('home') }}" class="nav-item">
            Site
          </a>
          <a href="{{ url('logout') }}" class="nav-item">
            Sair
          </a>
          <span class="nav-item">
            <button-pdf></button-pdf>
          </span>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-1">
        Guia do Usuário
      </h1>
      <h2 class="subtitle">
        Administração de Credenciados
      </h2>
    </div>
  </div>

<!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active"><a>
            <span class="icon"><i class="fa fa-user-md"></i></span>
            <span>Credenciados</span>
          </a></li>
          <li><a>
            <span class="icon"><i class="fa fa-medkit"></i></span>
            <span>Especialidades</span>
          </a></li>
          <li><a>
            <span class="icon"><i class="fa fa-map-marker"></i></span>
            <span>Cidades</span>
          </a></li>
          <li><a>
            <span class="icon"><i class="fa fa-map"></i></span>
            <span>Estados</span>
          </a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
          {{-- FIm HERO --}}
            @yield('content')
            
              {{-- Footer --}}
              <footer class="footer">
                  <div class="container">
                    <div class="content has-text-centered">
                      <p>
                        <strong>Real Convênios</strong> by <a href="http://antonioqm.com">AntonioQM</a>. Designer and Developer Front-end
                      </p>
                      <p>
                        <a class="icon" href="https://antonioqm.com">
                          <i class="fa fa-github"></i>
                        </a>
                      </p>
                    </div>
                  </div>
                </footer>
            
        </div>
    </div>
    <script src="/js/app.js"></script>
   {{--   @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endif --}}
</body>
</html>