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
                <li class="breadcrumb-item"><a href="{{ route('wait.index') }}">Waiting List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Waiting</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('import') }}" class="btn btn-sm btn-neutral"><i class="fa fa-cloud-upload"></i> Upload CSV</a>
            <a href="#" class="btn btn-sm btn-neutral">Queue 1 Move List</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid mt--6">
    <div class="row">

      @if(session()->has('success'))
      <div class="col-md-12">
          <div role="alert" class="alert alert-success alert-dismissible"><span class="alert-inner--icon">
              <i class="ni ni-like-2"></i></span> 
              <span class="alert-inner--text">
                  <strong> {{ session('success') }}</strong></span> <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button> 
                  <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
      </div>
     @endif
      @if(session()->has('delete'))
      <div class="col-md-12">
          <div role="alert" class="alert alert-danger alert-dismissible"><span class="alert-inner--icon">
              <i class="ni ni-like-2"></i></span> 
              <span class="alert-inner--text">
                  <strong> {{ session('delete') }}</strong></span> <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button> 
                  <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                    <span aria-hidden="true">×</span>
                  </button>
          </div>
      </div>
     @endif

      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">WAITING LIST</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center  table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Date</th>
                  <th scope="col" class="sort" data-sort="budget">Name</th>
                  <th scope="col" class="sort" data-sort="status">Email</th>
                
                  <th scope="col" class="sort" data-sort="completion">BitCoin</th>
                  <th scope="col" class="sort" data-sort="completion">Username</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
               @foreach ($waiting as $wait)
                   
                <tr>
                  <th scope="row">
                     {{ $wait->created_at }}
                  </th>
                  <td class="budget">
                    {{ $wait->name }}
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i>
                      <span class="status">{{ $wait->email }}</span>
                    </span>
                  </td>
                 
                  <td>
                    {{ $wait->bitcoin_address }}
                  </td>
                  <td>
                    {{ $wait->username }}
                  </td>
                  <td class="text-right">

                   

                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        
                      
                       @for ($i = 1; $i < 8; $i++)
                           
                       

                     <form id="approve-queue-{{ $i }}" action="{{ route('wait.move') }}" method="POST" class="d2-none">
                         @csrf
                         @method('POST')
                          <input type="hidden" name="que_id" value="{{ $i }}">
                          <input type="hidden" name="id" value="{{ $wait->id }}">
                          <button class="dropdown-item text-success">Approve Queue  {{  $i }}</button>
                     </form>
                     @endfor
                       
                       
                      </div>
                    </div>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
               {{ $waiting->links() }}
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark table -->
   
   
  </div>
@endsection