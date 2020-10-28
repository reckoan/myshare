@extends('layouts.app')

@section('content')
 <!-- Header -->
 <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('import') }}" class="btn btn-sm btn-neutral">Upload Waiting CSV</a>
            <a href="{{ route('taskimport') }}" class="btn btn-sm btn-neutral">Upload Task Waiting CSV</a>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats ">
              <!-- Card body -->
              <div class="card-body shadow-lg">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">QUEUE 1</h5>
                    <span class="h2 font-weight-bold mb-0">{{ $Queue1 }}</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <a class="btn btn-primary btn-sm " href="{{ route('que1.index') }}"> <i class="ni ni-button-play"></i> View</a>
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
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que2.index') }}"> <i class="ni ni-button-play"></i> View</a>
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
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que3.index') }}"><i class="ni ni-button-play"></i> View</a>
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
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que4.index') }}"> <i class="ni ni-button-play"></i> View</a>
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
                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                      <i class="ni ni-atom"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que5.index') }}"><i class="ni ni-button-play"></i> View</a>
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
                    <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                      <i class="ni ni-bag-17"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que6.index') }}"><i class="ni ni-button-play"></i> View</a>
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
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-building"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que7.index') }}"><i class="ni ni-button-play"></i> View</a>
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
                    <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                      <i class="ni ni-bold"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                   <a class="btn btn-primary btn-sm " href="{{ route('que8.index') }}"><i class="ni ni-button-play"></i> View</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Waiting List</h3>
              </div>
              <div class="col text-right">
                <a href="{{ route('wait.index') }}" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
           

            <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th class="text-right">BitCoin Address</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($WaitingList as $index =>  $item)
                  <tr>
                      <td class="text-center">{{ $index + 1 }}</td>
                      <td>{{ $item->created_at->diffForHumans() }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td class="text-right">&euro; {{ $item->bitcoin_address }}</td>
                      <td class="td-actions text-right">
                        {{-- <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                          <i class="ni ni-circle-08 pt-1"></i>
                        </button> --}}
                      
                        <a class="btn btn-success btn-icon btn-sm" href="{{ route('wait.move') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('approve-queue-{{ $item->id }}').submit();" data-toggle="tooltip" data-placement="top" title="Move To Que1">
                                {{ __('Q1') }}
                        </a>

                        

                         <form id="approve-queue-{{ $item->id }}" action="{{ route('wait.move') }}" method="POST" class="d-none">
                          @csrf
                          @method('POST')
                           <input type="hidden" name="que_id" value="1">
                           <input type="hidden" name="id" value="{{ $item->id }}">
                           
                         </form>

                   
                         <button type="button" class="btn btn-danger btn-icon btn-sm" data-toggle="modal" data-target=".bd-waiting-modal-sm-{{ $item->id }}">
                          <i class="ni ni-fat-remove pt-1"></i>
                        </button>

                        
  
                       <form id="delete-form-{{ $item->id }}" action="{{ route('wait.destroy', $item->id) }}" method="POST" class="d-none">
                           @csrf
                           @method('DELETE')
                       </form>
                      
                       
                          
                      </td>
                    
                      <div class="modal fade bd-waiting-modal-sm-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"> <i class="ni ni-scissors text-danger"></i> Are you sure?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Do you really want to delete these records? This process cannot be undone.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             
                              <a class="btn btn-danger" href="{{ route('wait.destroy', $item->id) }}"
                                onclick="event.preventDefault();
                                              document.getElementById('delete-form-{{ $item->id }}').submit();" data-toggle="tooltip" data-placement="top" title="Delete!">
                                 <i class="ni ni-fat-remove pt-1"></i> Delete
                               </a>


                              {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                            </div>
                          </div>
                        </div>
                      </div>

                  </tr>
                  @endforeach
                  
              </tbody>
          </table>
          </div>
        </div>
      </div>
      
    </div>
     
   

    </div>
   
@endsection
