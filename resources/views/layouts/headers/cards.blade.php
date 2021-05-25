<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                @foreach($barangays as $barangay)
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 my-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    @component('components.barangaynames', ['barangay' => $barangay->barangay])@endcomponent
                                    <h5 class="card-title text-uppercase text-muted mb-0">No. of Residents Surveyed</h5>
                                    <span class="h2 font-weight-bold mb-0">10</span>
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
        </div>
    </div>
</div>
