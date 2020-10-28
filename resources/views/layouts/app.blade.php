<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('https://ui-avatars.com/api/?name=mytreasure') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('agnih/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('agnih/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('agnih/css/argon.css?v=1.2.0') }}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
    <!-- Styles -->
</head>
<body class="bg-default">
    <div id="app">
        
      @include('layouts.Nav')
        


      <div class="main-content" id="panel">
        @include('layouts.SubNav')


            @yield('content')

       
             <!-- Footer -->
    
             @include('layouts.Footer')
      </div>

      </div>

    </div>


  
  

    <script src="{{ asset('agnih/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/js-cookie/js.cookie.js') }}"></script>
    
    <script src="{{ asset('agnih/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('agnih/js/argon.js?v=1.2.0') }}"></script>
    @include('sweetalert::alert')
    <script>
      $(document).ready(function(){
      $('#hidden').show();
      $('#shown').hide();
      $('button').click(function(){
      
      $('#hidden').hide();
      $('#shown').show();
      });});

      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
</body>
</html>
