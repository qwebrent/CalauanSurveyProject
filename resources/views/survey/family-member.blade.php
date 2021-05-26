@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __(''),
    'class' => 'col-lg-7'
])
<form method="post" action="#" autocomplete="off" enctype="multipart/form-data">
    @csrf

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Enter Data') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="pl-lg-0">
                            <h6 class="heading-small text-muted mb-4">{{ __('Relatives') }}</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('full_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Full Name') }}</label>
                                        <input type="text" name="full_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('full_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" value="{{ old('full_name') }}" required autofocus>

                                        @if ($errors->has('full_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('birthday') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Birthdate') }}</label>
                                        <input type="date" name="birthday" id="input-name" class="form-control form-control-alternative{{ $errors->has('birthday') ? ' is-invalid' : '' }}" placeholder="" value="{{ old('birthday') }}" required autofocus>

                                        @if ($errors->has('birthday'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('birthday') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('relationship') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Relationship') }}</label>
                                        <input type="text" name="relationship" id="input-name" class="form-control form-control-alternative{{ $errors->has('relationship') ? ' is-invalid' : '' }}" placeholder="{{ __('Relationship') }}" value="{{ old('relationship') }}" required autofocus>

                                        @if ($errors->has('relationship'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('relationship') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



@endsection
