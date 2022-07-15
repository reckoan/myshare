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
            <a class="navbar-brand" href="{{ route('payouts') }}"> ALLANDRICH - MYTREASURE </a>
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
        <div class="main-content" style="margin-top: 80px; margin-bottom: 80px;">
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                  <div class="header-body">
                    <h2 class="text-center m-t-4" style="text-align: center; color:#fff; padding-top: 24px;">CHECK YOUR PAYOUTS PAY-OUT STATUS 8 LIST</h2>
                    <div class="row align-items-center py-4" style="margin-top: 100px">
                        <div class="container-fluid mt--6">
                            <div class="row">
                              <div class="col">
                                <div class="card">
                                  <!-- Card header -->
                                  <div class="card-header border-0">
                                    <h3 class="mb-0">Q8-PAY-OUT STATUS</h3>
                                  </div>
                                  <!-- Light table -->
                                  <div class="table-responsive">
                                    <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>TASK NAME</th>
                                            <th>USERNAME</th>
                                            <th>Payment By</th>
                                            <th class="text-right">Amount</th>
                                            <th class="text-right">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($payouts8 as $index =>  $pay1)
                                             
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $pay1->name }}</td>
                                            <td>{{ $pay1->username }}</td>
                                            <td>
                                                @if ($pay1->isPayed == 1)
                                                    Faucetpay
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="text-right"> {{ $pay1->pay_amount }} </td>
                                            <td class="td-actions text-right">
                                                
                                                @if ($pay1->isPayed == 1)
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                                    Paid
                                                    </button>
                                                @else
                                                     <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                                        In-Progress
                                                      </button>
                                                @endif


                                             
                                              
                                              
                                            </td>
                                        </tr>

                                      @endforeach
                                    </tbody>
                                </table>
                                  </div>
                                  <!-- Card footer -->
                                  <div class="card-footer py-4">
                                    <nav aria-label="...">
                                       {{ $payouts8->links() }}
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
        <footer class="py-5 footer pt-0" id="footer-main" style="margin-top: 150px">
          <div class="container">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                  &copy; {{ date('Y') }} - {{ date('Y') + 1 }}<a href="https://mytreasure.store/" class="font-weight-bold ml-1" target="_blank">MYTREASURE - Fast Q system</a>
                </div>
              </div>
              <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                  <li class="nav-item">
                    <a href="https://www.agnih.com" class="nav-link" target="_blank">Design & Developed by Agnih</a>
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
