<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('agnih/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('agnih/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('agnih/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- agnih CSS -->
    <link rel="stylesheet" href="{{ asset('agnih/css/agnih.css?v=1.2.0') }}" type="text/css">
  </head>
    <!-- Styles -->
</head>
<body class="bg-default">
    <div id="app">
        

        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="./">
                ALLANDRICH - MYTREASURE
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                  <div class="row">
                    <div class="col-6 collapse-brand">
                      <a href="dashboard.html">
                        <img src="{{ asset('agnih/img/brand/blue.png') }}">
                      </a>
                    </div>
                    <div class="col-6 collapse-close">
                      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                      </button>
                    </div>
                  </div>
                </div>
                @include('layouts.HomeNav')
                <hr class="d-lg-none" />
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                 
                  <li class="nav-item d-none d-lg-block ml-lg-4">
                    <a href="https://allarewin.space/" target="_blank" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <i class="fas fa-home mr-2"></i>
                      </span>
                      <span class="nav-link-inner--text">Back to mytreasure</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="main-content">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
              <div class="container">
                <div class="header-body text-center mb-7">
                  <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                      <h1 class="text-white">Welcome!</h1>
                      <p class="text-lead text-white">Login AS #ALLANDRICH</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
              </div>
            </div>
            <!-- Page content -->
            @yield('content')
           
          </div>
        
       

      


        <footer class="py-5" id="footer-main">
            <div class="container">
              <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                  <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2020 <a href="https://www.agnih.com" class="font-weight-bold ml-1" target="_blank"> Design & Developed by Agnih</a>
                  </div>
                </div>
               
              </div>
            </div>


    </div>

    <script src="{{ asset('agnih/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('agnih/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('agnih/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- agnih JS -->
    <script src="{{ asset('agnih/js/agnih.js?v=1.2.0') }}"></script>
</body>
</html>
