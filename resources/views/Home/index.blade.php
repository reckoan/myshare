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
                    <span class="nav-link-inner--text">REGISTER & LOGIN</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Main content -->
        <div class="main-content" style="margin-top: 80px">
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                  <div class="header-body">
                    <h2 class="text-center m-t-4 pt-5 pb-4" style="text-align: center; color:#fff;">CHECK YOUR QUEUE STATUS</h2>
                    <div class="row align-items-center py-4">
                         
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-stats">
                              <!-- Card body -->
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">UPGRADE WAITING LIST</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $Waiting }}</span>
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                      <i class="ni ni-bold-right"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                 
                                  <a href="{{ route('waiting-list') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> WAITING LIST</a>
                                </p>
                              </div>
                            </div>
                          </div>
                         
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 1</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue1 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                  <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <a href="{{ route('queue-one') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 1</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 2</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue2 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-two') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 2</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 3</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue3 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-three') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 3</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 4</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue4 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-four') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 4</a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 5</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue5 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-five') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 5</a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 6</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue6 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-six') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 6</a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 7</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue7 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-seven') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 7</a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 8</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $Queue8 }}</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                                   <i class="ni ni-bold-right"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              <a href="{{ route('queue-eight') }}" class="btn btn-primary btn-sm"> <i class="ni ni-bold-right"></i> QUEUE 8</a>
                            </p>
                          </div>
                        </div>
                      </div>
                     
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
