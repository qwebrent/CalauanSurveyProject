@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            @foreach($barangays as $barangay)
            <div class="col-xl-4 col-lg-6">
                <div class="card card-stats mb-4 my-2">
                    <div class="card-body border-light">
                        <div class="row">
                            <div class="col">
                                @component('components.barangaynames', ['barangay' => $barangay->barangay])@endcomponent
                                <h5 class="card-title text-uppercase text-muted mb-0">No. of Residents Surveyed</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $barangay->surveyed }}</span>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <a href="{{ route('survey.create') }}" class="btn btn-outline-primary">Take Survey</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
