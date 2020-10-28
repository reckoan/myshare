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
                <li class="breadcrumb-item"><a href="{{ route('que4.index') }}">wait move list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Waiting moved</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('que1.index') }}" class="btn btn-sm btn-neutral">QUEUE 1 </a>
            <a href="{{ route('wait.index') }}" class="btn btn-sm btn-neutral"> BACK TO WAITING LIST</a>
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
            <h3 class="mb-0">WAITING MOVED LIST</h3>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            
            <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th class="text-right">BitCoin Address</th>
                      {{-- <th class="text-right">Actions</th> --}}
                  </tr>
              </thead>
              <tbody>
                @foreach ($WaitmoveList as $index => $wait)
                  <tr>
                      <td class="text-center">{{ $index + 1 }}</td>
                      <td>{{ $wait->created_at }}
                          <br> <small>{{ $wait->created_at->diffForHumans() }}</small>
                    </td>
                      <td>{{ $wait->name }}</td>
                      <td>{{ $wait->email }}</td>
                      <td class="text-right">{{ $wait->bitcoin_address }}</td>
                      <td class="td-actions text-right">
                        {{-- <button type="button" class="btn btn-danger btn-icon btn-sm" data-toggle="modal" data-target=".bd-delete-modal-sm-{{ $wait->id }}">
                          <i class="ni ni-fat-remove pt-1"></i>
                        </button> --}}
  
                        
  
                       {{-- <form id="delete-form-{{ $wait->id }}" action="{{ route('que4.destroy', $wait->id) }}" method="POST" class="d-none">
                           @csrf
                           @method('DELETE')
                       </form> --}}
                       
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
               {{ $WaitmoveList->links() }}
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark table -->
   
   
  </div>
@endsection