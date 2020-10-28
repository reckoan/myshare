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
              <img src="{{ asset('agnih/img/brand/white.png') }}">
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
                  <a href="{{ route('info') }}" class="nav-link">
                    <span class="nav-link-inner--text">Home</span> 
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('waiting-list') }}" class="nav-link">
                    <span class="nav-link-inner--text">Q-Status</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
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
        <div class="main-content" style="margin-top: 80px; margin-bottom: 80px;">
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                  <div class="header-body">
                    <h2 class="text-center m-t-4" style="text-align: center; color:#fff; padding-top: 24px;">CHECK YOUR QUEUE 7 LIST STATUS</h2>
                    <div class="row align-items-center py-4" style="margin-top: 100px">
                        <div class="container-fluid mt--6">
                            <div class="row">
                              <div class="col">
                                <div class="card">
                                  <!-- Card header -->
                                  <div class="card-header border-0">
                                    <h3 class="mb-0">QUEUE 7 FOR UPGRADE</h3>
                                  </div>
                                  <!-- Light table -->
                                  <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                      <thead class="thead-light">
                                        <tr>
                                          <th scope="col" class="sort" data-sort="name">#</th>
                                          <th scope="col" class="sort" data-sort="budget">Date</th>
                                          <th scope="col" class="sort" data-sort="status">Name</th>
                                          <th scope="col">Email</th>
                                        </tr>
                                      </thead>
                                      <tbody class="list">
                                        @foreach ($queue7 as $key => $two)
                                           
                                       <tr>
                                        <td>
                                           {{ $key + 1 }}
                                        </td>
                                      <td class="budget">
                                        {{ $one->created_at }}
                                      </td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-warning"></i>
                                          <span class="status">{{ $one->name }}</span>
                                        </span>
                                      </td>
                                      <td>
                                         {{ $one->email }}
                                      </td>
                                      
                                    </tr>
                                        @endforeach
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- Card footer -->
                                  <div class="card-footer py-4">
                                    <nav aria-label="...">
                                      {{ $queue7->links() }}
                                    </nav>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Dark table -->
                           
                            
                          </div>
                       
                    </div>
                    <!-- Card stats -->
                    
                  </div>
                </div> 
              </div>
        </div>

        <div class="clearfix">
           
        </div>
        <!-- Footer -->
        <footer class="py-5 footer pt-0" id="footer-main" style="margin-top: 80px">
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