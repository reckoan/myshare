<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <link rel="icon" href="{{ asset('agnih/img/brand/favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('agnih/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('agnih/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('agnih/css/argon.css?v=1.2.0') }}" type="text/css">

        <!-- Styles -->
        
    </head>
    <body class="bg-default">
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="dashboard.html">
              <span>MYTREASURE - Fast Q system</span>
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
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="./" class="nav-link">
                    <span class="nav-link-inner--text">Home</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('info') }}" class="nav-link">
                    <span class="nav-link-inner--text">Q-Status</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <span class="nav-link-inner--text">Q-Payouts</span>
                  </a>
                </li>
              </ul>
              <hr class="d-lg-none" />
              <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                
                <li class="nav-item d-none d-lg-block ml-lg-4">
                  <a href="https://mytreasure.store/" target="_blank" class="btn btn-neutral btn-icon">
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
        <!-- Main content -->
        <div class="main-content">
          <!-- Header -->
          <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-3">
            <div class="container">
              <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                  <div class="col-xl-8 col-lg-8 col-md-8 px-5">
                    <h1 class="text-white">Register Your an account for  New Q-Status</h1>
                    <p class="text-lead text-white">Give you name and email address, bit coin address and username </p>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          <!-- Page content -->
          <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-8">
                <div class="card bg-secondary border-0">

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                   @endif
                  
                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                      {{-- <small>Register up with mytreasure.store credentials</small>   --}}
                    </div>
                    <form role="form" method="post" action="{{ route('waiting.store') }}">
                        @csrf

                        <div class="form-group">
                          <div class="input-group input-group-merge input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control" placeholder="mytreasure Username" type="text" value="{{ old('username') }}" name="username">
                           
                          </div>
                          @error('username')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      
                      <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control" placeholder="Name" type="text" value="{{ old('name') }}" name="name">
                         
                        </div>
                        @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" name="email">
                        </div>
                        @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                          </div>
                          <input class="form-control" placeholder="bitcoin address" value="{{ old('bitcoin_address') }}" type="text" name="bitcoin_address">
                        </div>
                        @error('bitcoin_address')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      </div>
                      
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4"> <i class="ni ni-cloud-upload-96"></i> Update & Processed</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="py-5" id="footer-main">
          <div class="container">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                  &copy; {{ date('Y') }} <a href="https://www.agnih.com" class="font-weight-bold ml-1" target="_blank">Agnih Software</a>
                </div>
              </div>
              <div class="col-xl-6">
                {{-- <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                  </li>
                </ul> --}}
              </div>
            </div>
          </div>
        </footer>
       
         


        <script src="{{ asset('agnih/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('agnih/js/argon.js?v=1.2.0') }}"></script>


    </body>
</html>
