<!DOCTYPE html>
<html lang="en">
<head>

{{-- Fontes Adobe TypeKit --}}
<script>
  (function(d) {
    var config = {
      kitId: 'zcb0gkk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
{{-- Fontes Adobe TypeKit --}}

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- FAVICON --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('/favicon/manifest.json')}}">


    {{-- METATAGS FACEBOOK--}}
<meta property="og:type" content="website" />
<meta property="og:title" content="Real Convênios - Saúde pra você e pra quem você ama" />
<meta property="og:description" content="Convênios de saúde" />
<meta property="og:url" content="http://www.realconvenios.com.br/" />
<meta property="og:site_name" content="Real Convênios - Guia de Convênios de Saúde" />
<meta property="og:image" content="{{ asset('/img/real_og.jpg')}}" />
<meta property="og:locale" content="pt_BR" />
    {{-- METATAGS FACEBOOK--}}

    <!-- Scripts -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.meta')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#a9f0ff">
    {{-- FIM FAVICON --}}

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Styles -->
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/hover.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/bootstrap-select.css" rel="stylesheet">
    <!-- FormValidation CSS file -->
    <link rel="stylesheet" href="/css/formValidation.min.css">


    {{-- Material FOnt Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Material FOnt Icons FIM --}}
    


</head>
<body>
@include('partials.analyticstracking')  
<div  id="app">
    

        
        @include('partials.topbar')
        @include('partials.menu-topo')

        @yield('content')


</div>
    @include('partials.footer')
    <a href="#" id="up"></a>
    
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
