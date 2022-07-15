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
                <li class="breadcrumb-item"><a href="{{ route('wait.index') }}">Q1 Waiting List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Q1 Waiting</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('import') }}" class="btn btn-sm btn-neutral"><i class="fa fa-cloud-upload"></i> Q1 Upload CSV</a>
            <a href="{{ route('waitmovelist') }}" class="btn btn-sm btn-neutral">Q1 Waiting Move List</a>
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
            <h3 class="mb-0">WAITING FOR UPGRADE</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            
            <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Date</th>
                      <th>Task Name</th>
                      <th>Created Date</th>
                      <th class="text-right">BitCoin Address</th>
                      <th class="text-right">Username</th>
                      <th class="text-right">Method</th>
                      <th class="text-right">transaction Id</th>
                      <th class="text-right">Selected queue</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($waiting as $index =>  $wait)
                  <tr>
                      <td class="text-center">{{ $index + 1 }}</td>
                      <td>{{ $wait->created_at }}
                        <br> <small>{{ $wait->created_at->diffForHumans() }}</small>
                      </td>
                      <td>{{ $wait->name }}</td>
                      <td>{{ $wait->email }}</td>
                      <td class="text-right">{{ $wait->bitcoin_address }}</td>
                      <td>{{ $wait->username }}</td>
                      <td class="text-right">{{ $wait->method }}</td>
                      <td class="text-right">{{ $wait->transaction_id }}</td>
                      <td class="text-right">{{ $wait->selected_queue }}</td>
                      <td class="td-actions text-right">
                       
                        <button type="button" class="btn btn-info btn-icon btn-sm" data-toggle="modal" data-target=".bd-que-modal-lg-{{ $wait->id }}">
                          <i class="ni ni-circle-08 pt-1"></i>
                        </button>
                       
                        <button type="button" class="btn btn-danger btn-icon btn-sm" data-toggle="modal" data-target=".bd-delete-modal-sm-{{ $wait->id }}">
                          <i class="ni ni-fat-remove pt-1"></i>
                        </button>

  
                       <form id="delete-form-{{ $wait->id }}" action="{{ route('wait.destroy', $wait->id) }}" method="POST" class="d-none">
                           @csrf
                           @method('DELETE')
                       </form>
                     

                      <div class="modal fade bd-que-modal-lg-{{ $wait->id  }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">MOVE TO QUEUE 1 - 8</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                              <div class="row">

                                @for ($i = 1; $i <= 8; $i++)

                                <form id="approve-queue-{{ $i }}" action="{{ route('wait.move') }}" method="POST" class="d-none1">
                                    @csrf
                                    @method('POST')
                                      <input type="hidden" name="que_id" value="{{ $i }}">
                                      <input type="hidden" name="id" value="{{ $wait->id }}">
                                      <button class="btn btn-primary ml-2 mt-2" type="submit">QUEUE {{ $i }}</button>
                                </form>

                                @endfor

                               </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      

                      <div class="modal fade bd-delete-modal-sm-{{ $wait->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                             
                              <a class="btn btn-danger" href="{{ route('que1.destroy', $wait->id) }}"
                                onclick="event.preventDefault();
                                              document.getElementById('delete-form-{{ $wait->id }}').submit();" data-toggle="tooltip" data-placement="top" title="Delete!">
                                 <i class="ni ni-fat-remove pt-1"></i> Delete
                               </a>


                              {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                            </div>
                          </div>
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