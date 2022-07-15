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
                <li class="breadcrumb-item"><a href="{{ route('import') }}">Q1 Uploade</a></li>
                <li class="breadcrumb-item active" aria-current="page">Q1 Upload File</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('wait.index') }}" class="btn btn-sm btn-neutral">Q1 Waiting List</a>
            <a href="{{ route('taskimport') }}" class="btn btn-sm btn-neutral">Task Waiting List Uploade</a>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <h3 class="mb-0"> Upload UPGRADE Waiting LIST</h3>
                </div>
              
               
                <div class="card-body">
                 
                     <div class="row justify-content-center">

                       
                        
                        <div class="col-md-6">
                          
                            <form action="{{ route('process') }}" method="post" enctype="multipart/form-data">
                             @csrf
                            
                             <div class="form-group">
                               <label for="">UPLOAD CSV FILE </label>
                               <input type="file" class="form-control" name="csv_file">
                               {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
                               @error('csv_file')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                             </div>

                            

                             <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary">
                                    {{-- <img src="path\to\loading\gif"  id='shown' style="display:none"/ > --}}
                                     <span id='shown' style="display:none"> <i class="fa fa-spinner fa-spin"></i> </span>
                                      <span id='hidden '>Upload File</span>
                                    
                                    </button>
                              </div>

                            </form>

                        </div>

                     </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection