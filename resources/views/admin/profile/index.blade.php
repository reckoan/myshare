@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('myprofile') }}">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('que2.index') }}" class="btn btn-sm btn-neutral">QUEUE 2 </a>
            <a href="{{ route('que1.index') }}" class="btn btn-sm btn-neutral">BACK TO QUE 1</a>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="mb-0">Change Password</h3>
            </div>
          
            <form method="post" action="{{ route('passwordsave') }}">
              @csrf
              @method('POST')
                <div class="row p-4">
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input class="form-control" name="old_password" placeholder="Old Password" type="password">
                           
                          </div>
                          @error('old_password')
                          <span class="text-danger">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                        </div>
                    </div>
                </div>
               
                <div class="row p-4">
                    
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        <input class="form-control" name="new_password" placeholder="New Password" type="password">
                      </div>
                      @error('new_password')
                      <span class="text-danger">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group mb-4">
                        <input class="form-control" name="conf_password" placeholder="Re Password" type="password">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        @error('conf_password')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row p-4">
                  
                  <div class="col-md-6">
                    <div class="form-group has-danger">
                      <button type="submit" class="btn btn-success">Save & Update</button>
                    </div>
                  </div>
                </div>
              </form>


        </div>
      </div>
    </div>
</div>

@endsection