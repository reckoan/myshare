<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('agnih/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que1.index') }}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text text-default "> <b class="font-weight-bold"> QUEUE 1 </b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que2.index') }}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 2 </b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que3.index') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text"> <b class="font-weight-bold"> QUEUE 3</b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que4.index') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 4</b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que5.index') }}">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 5</b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que6.index') }}">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 6</b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que7.index') }}">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 7</b></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('que8.index') }}">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text"><b class="font-weight-bold">QUEUE 8</b></span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Waiting List</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('wait.index') }}">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Que1 Waiting List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('import') }}">
                <i class="ni ni-cloud-upload-96"></i>
                <span class="nav-link-text">Que1 Upload Waiting List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('taskshow') }}">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Task Waiting List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('taskimport') }}">
                <i class="ni ni-cloud-upload-96"></i>
                <span class="nav-link-text">Upload Task Waiting List</span>
              </a>
            </li>
           
            
          </ul>
        </div>
      </div>
    </div>
  </nav>