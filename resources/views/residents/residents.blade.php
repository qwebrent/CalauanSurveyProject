@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => 'Residents Table',
        'class' => 'col-lg-7'
    ])

<div class="container-fluid mt--7">
        <h1>Residents</h1>
        <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead> 
                          <tr>
                            <th class="text-uppercase" style="color: black; font-weight: bold;">Resident ID</th>
                            <th class="text-uppercase ps-2" style="color: black; font-weight: bold;">Head of the Family</th>
                            <th class="text-uppercase" style="color: black; font-weight: bold;">Email</th>
                            <th class="text-uppercase" style="color: black; font-weight: bold;">Contact No.</th>
                            <th class="" style="color: black; font-weight: bold;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($residents as $resident)
                          <tr>
                            <td>{{ $resident->unique_id }}</td>
                            <td>{{ $resident->getFullName() }}</td>
                            <td>{{ $resident->email }}</td>
                            <td>{{ $resident->contact_no }}</td>
                            <td>
                                <a href="{{ route('residence.edit', $resident->id) }}" class="btn btn-outline-primary btn-sm mb-0">View</a>
                            </td>
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