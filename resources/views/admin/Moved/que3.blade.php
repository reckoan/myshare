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
                <li class="breadcrumb-item"><a href="{{ route('que3.index') }}">Que3</a></li>
                <li class="breadcrumb-item active" aria-current="page">Queue 3</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('que4.index') }}" class="btn btn-sm btn-neutral">QUEUE 4 </a>
            <a href="{{ route('que3.index') }}" class="btn btn-sm btn-neutral">BACK TO QUE 3</a>
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
            <h3 class="mb-0">QUEUE 3 PAYOUT LIST</h3>
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
                      <th class="text-right">Status</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($que3moved as $index => $wait)
                  <tr>
                      <td class="text-center">{{ $index + 1 }}</td>
                      <td>{{ $wait->created_at }}
                        <br> <small>{{ $wait->created_at->diffForHumans() }}</small>
                      </td>
                      <td>{{ $wait->name }}</td>
                      <td>{{ $wait->email }}</td>
                      <td class="text-right">{{ $wait->username }}</td>
                      <td>{{ ($wait->isPayed == 1) ? 'Paid' : 'Not Paid' }}</td>
                      <td class="td-actions text-right">
                        
                        <button type="button" class="btn btn-info btn-icon btn-sm" data-toggle="modal" data-target=".bd-update-modal-lg-{{ $wait->id }}">
                          <i class="ni ni-align-center pt-1"></i>
                        </button>
                        
                        <button type="button" class="btn btn-danger btn-icon btn-sm" data-toggle="modal" data-target=".bd-delete-modal-sm-{{ $wait->id }}">
                          <i class="ni ni-fat-remove pt-1"></i>
                        </button>
  
                        <div class="modal fade bd-update-modal-lg-{{ $wait->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"> <i class="ni ni-ungroup text-info"></i> Update Row And Save !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                 <form autocomplete="on" action="https://faucetpay.io/api/v1/send" method="post" target="_blank">
                    <div class="form-group">
                      <label for="text">API KEY:</label> <input class="form-control" name="api_key" placeholder="API KEY" type="text" required="">
                    </div>
                    <div class="form-group">
                      <label for="text">QUEUE 1 SPACE REWARD:</label> <input class="form-control" name="amount" placeholder="AMOUNT" type="text" value="2500" required="">
                    </div>
                    <div class="form-group">
                      <label for="text">USER ID:</label> <input class="form-control" name="to" placeholder="FAUCETPAY ID" type="text" required="">
                    </div>
                      <button class="btn btn-success btn-md btn-block" type="submit">Submit</button>
                </form> 
                                <form id="update-form-{{ $wait->id }}" action="{{ route('que3moved.update3', $wait->id) }}" method="POST" class="">
                                  @csrf
                                  @method('PUT')

                                  
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="input-group mb-4">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
                                          </div>
                                          <input class="form-control" name="payid" placeholder="Bitcoin Address" type="text" value="{{ $wait->payid }}">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="pay_amount" placeholder="Amount" type="text"  value="{{ $wait->pay_amount }}">
                                          <div class="input-group-append">
                                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                 

                              </form>


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               
                                <a class="btn btn-info" href="{{ route('que3moved.update3', $wait->id) }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('update-form-{{ $wait->id }}').submit();" data-toggle="tooltip" data-placement="top" title="Update!">
                                   <i class="ni ni-align-center pt-1"></i> Update
                                 </a>
  
  
                                {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                              </div>
                            </div>
                          </div>
                        </div>
  
                       <form id="delete-form-{{ $wait->id }}" action="{{ route('que3moved.destroy3', $wait->id) }}" method="POST" class="d-none">
                           @csrf
                           @method('DELETE')
                       </form>
                       
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
               {{ $que3moved->links() }}
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark table -->
   
   
  </div>
@endsection