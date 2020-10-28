@extends('layouts.app')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tables</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                  <h3 class="mb-0">Upload Waiting LIST</h3>
                </div>
              
                <div class="card-body">
                  
                    <form class="form-horizontal" method="POST" action="{{ route('import_process') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />

                        <table class="table">
                            @if (isset($csv_header_fields))
                            <tr>
                                @foreach ($csv_header_fields as $csv_header_field)
                                    <th>{{ $csv_header_field }}</th>
                                @endforeach
                            </tr>
                            @endif
                            @foreach ($csv_data as $row)
                                <tr>
                                @foreach ($row as $key => $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                                </tr>
                            @endforeach
                            <tr>
                                @foreach ($csv_data[0] as $key => $value)
                                    <td>
                                        <select name="fields[{{ $key }}]">
                                            @foreach (config('app.db_fields') as $db_field)
                                                <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                    @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                @endforeach
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-primary">
                            Import Data
                        </button>
                    </form>
                    

                </div>

            </div>
        </div>
    </div>
</div>
@endsection