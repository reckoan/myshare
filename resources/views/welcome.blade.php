<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ALLANDRICH - MYTREASURE</title>

        <link rel="icon" href="https://allarewin.space/ffav-icon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('agnih/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('agnih/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <!-- agnih CSS -->
        <link rel="stylesheet" href="{{ asset('agnih/css/agnih.css?v=1.2.0') }}" type="text/css">

        <!-- Styles -->

    </head>
    <body class="bg-default">
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="./">
              <span>ALLANDRICH - MYTREASURE</span>
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
                  <a href="https://allarewin.space" target="_blank" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <i class="fas fa-home mr-2"></i>
                    </span>
                    <span class="nav-link-inner--text">REGISTER & LOGIN</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Main content -->
        <div class="main-content">

          <!-- Header -->
          <div class="header bg-gradient- py-7 py-lg-8 pt-lg-3">
            <div class="container">
              <div class="header-body text-center mb-7">
                  <img src="https://allarewin.space/allandrich_logo.png" alt="Flowers in Chania" width="75" height="75">
                <h1 class="text-white text-center">ALLANDRICH</h1>
                  <h1 class="text-white text-center">Q - UPGRDAE</h1>
                  <h3 class="text-white"> Q1 SPACE GIVES YOU MANY REWARDS AGAIN AND AGAIN FROM Q8  </h3>
                  <h4 class="text-white"> UPGRADE NOW TO GET FAST REWARDS FROM THE QUEUE SYSTEM  </h4>
                  
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-ld-6 col-md-6">
                            <div class="header-body text-center mb-7">
                                <div class="row justify-content-center">
                                    <div class="col-xl-10 col-lg-10 col-md-10 px-5">

                                           <h3 class="text-white"> STEP -1  </h3>
                                            <p class="text-lead text-white">MAKE PAYMENT</p>
                                            <h3 class="text-white"> Q 4 - REWARD 12500 SAT  </h3>
                                            <p><a target="_blank" href="https://gocps.net/e4og19lw88vvzrgadikejtz6u/" target="_blank"><button class="btn btn-info btn-sm btn-block">Q 4 UPGRADE - CLICK HERE </button></a></p>
                                            <h3 class="text-white"> Q 5 - REWARD 62500 SAT  </h3>
                                            <p><a target="_blank" href="https://gocps.net/9qepobnglk4c1h6ukdwcfu96b/" target="_blank"><button class="btn btn-info btn-sm btn-block">Q 5 UPGRADE - CLICK HERE </button></a></p>
                                            <h3 class="text-white"> Q 6 - REWARD 125000 SAT  </h3>
                                            <p> <a target="_blank" href="https://gocps.net/8oyclgw897pucz1luo4kq4wyl/" target="_blank"><button class="btn btn-info btn-sm btn-block">Q 6 UPGRADE - CLICK HERE </button></a></p>
                                            <h3 class="text-white"> Q 7 - REWARD 250000 SAT  </h3>
                                            <p>  <a target="_blank" href="https://gocps.net/1frqtqv12uu3jdlbjwaezi8zp/" target="_blank"><button class="btn btn-info btn-sm btn-block">Q 7 UPGRADE - CLICK HERE </button></a></p>
                                            <h3 class="text-white"> Q 8 - REWARD 500000 SAT  </h3>
                                            <p><a target="_blank" href="https://gocps.net/f30owaqd2wyrvgooyuzycufx6/" target="_blank"><button class="btn btn-info btn-sm btn-block">Q 8 UPGRADE - CLICK HERE </button></a></p>
<h5 class="text-white"> Q8 SPACE GIVES YOU ENDLESS REWARDS AGAIN AND AGAIN  </h5>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3 class="text-white"> STEP -2  </h3>
                            <p class="text-lead text-white">MAKE PAYMENT THEN FILL THE FORM</p>
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
                                            <label>ALLAREWIN.SPACE USERNAME</label>
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Username" type="text" value="{{ old('username') }}" name="username">

                                            </div>
                                            @error('username')
                                            <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                                            @enderror
                                        </div>

                                        <div class="form-group d-none">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Name" type="text" readonly value="{{ old('name') }}" name="name">

                                            </div>
                                            @error('name')
                                            <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group d-none">
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Email" type="email" readonly value="{{ old('email') }}" name="email">
                                            </div>
                                            @error('email')
                                            <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group d-none">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="bitcoin address" readonly value="{{ old('bitcoin_address') }}" type="text" name="bitcoin_address">
                                            </div>
                                            @error('bitcoin_address')
                                            <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Transaction Id" value="{{ old('transaction_id') }}" type="text" name="transaction_id">
                                            </div>

                                            @error('transaction_id')
                                            <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                                </div>

                                                <select class="form-control" name="selected_queue" id="selected_queue">
                                                    <option value="" selected>Select Queue</option>
                                                    <option value="QUEUE 4">QUEUE 4 ( 6,500 satoshi )</option>
                                                    <option value="QUEUE 5">QUEUE 5 ( 31,000 satoshi )</option>
                                                    <option value="QUEUE 6">QUEUE 6 ( 62,000 satoshi )</option>
                                                    <option value="QUEUE 7">QUEUE 7 ( 125,000 satoshi )</option>
                                                    <option value="QUEUE 8">QUEUE 8 ( 250,000 satoshi )</option>
                                                </select>

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
              </div>
            </div>

          </div>
          <!-- Page content -->
          <div class="container mt--8 pb-5">
            <!-- Table -->

        </div>
        <!-- Footer -->
        <footer class="py-5" id="footer-main">
          <div class="container">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                  &copy; {{ date('Y') }} {{ date('Y') + 1 }} <a href="https://mytreasure.store/" class="font-weight-bold ml-1" target="_blank">Mytreasure</a>
                </div>
              </div>
              <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end d-none">
                  <li class="nav-item">
                    <a href="https://www.agnih.com/" class="nav-link" target="_blank">Design & Developed by Agnih Software</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </footer>

        <script src="{{ asset('agnih/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- agnih JS -->
        <script src="{{ asset('agnih/js/agnih.js?v=1.2.0') }}"></script>


    </body>
</html>
