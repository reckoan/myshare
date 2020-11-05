<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mytreasure</title>

        <link rel="icon" href="{{ asset('https://ui-avatars.com/api/?name=mytreasure') }}" type="image/png">
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
              
               @include('layouts.HomeNav')

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
                  <div class="col-xl-10 col-lg-10 col-md-10 px-5">
                    <h1 class="text-white">Welcome!</h1>
                    <p class="text-lead text-white" style="font-size: 24px">Now you can multiply your earnings just by viewing advertisements.

                        If you are an advertiser you can get more visibility in your products, and with it you can earn a lot more.
                        
                        All partner's can activate our single line Q through your earnings to earn high amount.
                        
                        We assure more stable and life changing plan for everyone and forever </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!-- Header -->

         <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card bg-secondary border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="wrapper">
                               
                              <div class="section features-6">
                                <div class="container">
                                  <div class="row align-items-center">
                                    <div class="col-lg-6">
                                      <div class="info info-horizontal info-hover-primary">
                                        <div class="description pl-4">
                                          <h5 class="title" style="font-size: 20px">EARN BITCOINS</h5>
                                          <p>The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now.</p>
                                          
                                        </div>
                                      </div>
                                     
                                      
                                    </div>
                                    <div class="col-lg-6 col-10 mx-md-auto">
                                      <img class="ml-lg-5" src="{{ asset('agnih/img/brand/bitcoin.png') }}" width="100%">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

         

        <div class="container mt-1 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="card bg-secondary border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="wrapper">
                                <div class="section features-1">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-8 mx-auto text-center">
                                        <span class="badge badge-primary badge-pill mb-3">Advertise </span>
                                        <h3 class="display-3">EARN BITCOINS</h3>
                                        <p class="lead">Now you can multiply your earnings just by viewing advertisements</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="info">
                                          <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                                            <i class="ni ni-settings-gear-65"></i>
                                          </div>
                                          <h6 class="info-title text-uppercase text-primary mt-2" style="font-size: 20px">Earn bitcoins</h6>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Earn bitcoins by viewing advertisements.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Earn from home.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Guaranteed ads daily.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Earn more from offers and surveys.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Young, you can invite many friends and get many referrals.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Instant payments with the most popular micropayment processors.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> All Q1 to Q4 payout will be send faucetpay</p>
                                         
                                          <a href="javascript:;" class="text-wight btn btn-success mt-3">Become a member
                                            <i class="ni ni-bold-right text-wight"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="info">
                                          <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                                            <i class="ni ni-atom"></i>
                                          </div>
                                          <h6 class="info-title text-uppercase text-success mt-2" style="font-size: 20px">Advertise</h6>
                                          
                                          <p class="h4"><i class="ni ni-check-bold"></i> All visitors are bitcoin users.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Access detailed statistics of your campaign.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Choose a duration between 10 to 200 seconds.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Advanced anti-cheat protection.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Your audience will view your ad for the whole duration.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Free outside visitor clicks.</p>
                                          <p class="h4"><i class="ni ni-check-bold"></i> Anonymous advertising, no registration required.</p>

                                          <a href="javascript:;" class="text-wight btn btn-info mt-3">Advertise here 
                                            <i class="ni ni-bold-right text-wight"></i>
                                          </a>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                                <br /><br />


                              <div class="row">
                              
                                 <div class="col-lg-12">
                                      




                                 </div>

                              </div>


                        </div>
                       </div>
                    </div>
                </div>
                 

                <div class="col-lg-12 col-md-12">
                    <div class="card bg-secondary border-0">
                        <div class="card-body px-lg-5 py-lg-5">

                          <div class="row">
                            <div class="col-md-12">
                              <iframe data-aa="1502363" src="//ad.a-ads.com/1502363?size=728x90" scrolling="no" style="width:728px; height:90px; border:0px; padding:0; overflow:hidden;" allowtransparency="true"></iframe>
                            </div>
                            <div class="col-md-12">
                              <iframe data-aa="1502363" src="//ad.a-ads.com/1502363?size=728x90" scrolling="no" style="width:728px; height:90px; border:0px; padding:0; overflow:hidden" allowtransparency="true"></iframe>
                            </div>
                          </div>
                        
                          
                        
                        </div>  
                    </div>
                </div>

            </div>
        </div>
        
            <br /><br />


            <footer class="footer">
                <div class="container">
                  <div class="row row-grid align-items-center mb-5">
                    <div class="col-lg-6">
                      <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                    </div>
                   
                  </div>
                  <hr>
                  <div class="row align-items-center justify-content-md-between">
                    <div class="col-md-6">
                      <div class="copyright">
                        © {{ date('Y')  }} - {{ date('Y') + 1 }} <a href="https://mytreasure.store/" target="_blank">MYTREASURE - Fast Q system</a>.
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="copyright pull-right d-none">
                          <a href="https://agnih.com/" target="_blank">Design & Developed by Agnih</a>.
                        </div>
                      </div>
                    
                  </div>
                </div>
              </footer>

        <!-- Main content -->
        
        <!-- Footer -->
        {{-- <footer class="py-5" id="footer-main">
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
        </footer> --}}

        <script src="{{ asset('agnih/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('agnih/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- agnih JS -->
        <script src="{{ asset('agnih/js/agnih.js?v=1.2.0') }}"></script>


    </body>
</html>
