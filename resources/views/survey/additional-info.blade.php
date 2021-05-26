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
                        <h6 class="heading-small text-muted mb-4">{{ __('Highest Educational Attainment') }}</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('school_name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name of School') }}</label>
                                    <input type="text" name="school_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name of School') }}" value="{{ old('school_name') }}" required autofocus>

                                    @if ($errors->has('school_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('school_address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('School Address') }}</label>
                                    <input type="text" name="school_address" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_address') ? ' is-invalid' : '' }}" placeholder="{{ __('School Address') }}" value="{{ old('school_address') }}" required autofocus>

                                    @if ($errors->has('school_address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('course') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Course') }}</label>
                                    <input type="text" name="course" id="input-name" class="form-control form-control-alternative{{ $errors->has('course') ? ' is-invalid' : '' }}" placeholder="{{ __('Course') }}" value="{{ old('course') }}" required autofocus>

                                    @if ($errors->has('course'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('course') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('level') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Level') }}</label>
                                    <input type="text" name="level" id="input-name" class="form-control form-control-alternative{{ $errors->has('level') ? ' is-invalid' : '' }}" placeholder="{{ __('e.g. College, High School') }}" value="{{ old('level') }}" required autofocus>

                                    @if ($errors->has('level'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('school_year') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('School Year') }}</label>
                                    <input type="text" name="school_year" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_year') ? ' is-invalid' : '' }}" placeholder="{{ __('School Year') }}" value="{{ old('school_year') }}" required autofocus>

                                    @if ($errors->has('school_year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school_year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">{{ __('Work Experience') }}</h6>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('job_type') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Job Type') }}</label>
                                    <input type="text" name="job_type" id="input-name" class="form-control form-control-alternative{{ $errors->has('job_type') ? ' is-invalid' : '' }}" placeholder="{{ __('Job Type') }}" value="{{ old('job_type') }}" required autofocus>

                                    @if ($errors->has('job_type'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('job_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Position') }}</label>
                                    <input type="text" name="position" id="input-name" class="form-control form-control-alternative{{ $errors->has('position') ? ' is-invalid' : '' }}" placeholder="{{ __('Position') }}" value="{{ old('position') }}" required autofocus>

                                    @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('year_from') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Year From') }}</label>
                                    <input type="text" name="year_from" id="input-name" class="form-control form-control-alternative{{ $errors->has('year_from') ? ' is-invalid' : '' }}" placeholder="{{ __('From:') }}" value="{{ old('year_from') }}" required autofocus>

                                    @if ($errors->has('year_from'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year_from') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('year_to') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Year To') }}</label>
                                    <input type="text" name="year_to" id="input-name" class="form-control form-control-alternative{{ $errors->has('year_to') ? ' is-invalid' : '' }}" placeholder="{{ __('To:') }}" value="{{ old('year_to') }}" required autofocus>

                                    @if ($errors->has('year_to'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year_to') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">{{ __('Household') }}</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('yearnow') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Year Today') }}</label>
                                    <input type="text" name="yearnow" id="input-name" class="form-control form-control-alternative{{ $errors->has('yearnow') ? ' is-invalid' : '' }}" placeholder="{{ now()->year }}" value="{{ old('yearnow') }}" required autofocus>

                                    @if ($errors->has('yearnow'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('yearnow') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group{{ $errors->has('owner') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Owner') }}</label>
                                    <input type="text" name="owner" id="input-name" class="form-control form-control-alternative{{ $errors->has('owner') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner\'s Name') }}" value="{{ old('owner') }}" required autofocus>

                                    @if ($errors->has('owner'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('owner') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('lot') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Lot') }}</label>
                                    <input type="text" name="lot" id="input-name" class="form-control form-control-alternative{{ $errors->has('lot') ? ' is-invalid' : '' }}" placeholder="{{ __('Lot') }}" value="{{ old('lot') }}" required autofocus>

                                    @if ($errors->has('lot'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lot') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Street') }}</label>
                                    <input type="text" name="street" id="input-name" class="form-control form-control-alternative{{ $errors->has('street') ? ' is-invalid' : '' }}" placeholder="{{ __('Street') }}" value="{{ old('street') }}" required autofocus>

                                    @if ($errors->has('street'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('street') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('purok') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Purok') }}</label>
                                    <input type="text" name="purok" id="input-name" class="form-control form-control-alternative{{ $errors->has('purok') ? ' is-invalid' : '' }}" placeholder="{{ __('Purok') }}" value="{{ old('purok') }}" required autofocus>

                                    @if ($errors->has('purok'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('purok') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('barangay') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Barangay') }}</label>
                                    <input type="text" name="barangay" id="input-name" class="form-control form-control-alternative{{ $errors->has('barangay') ? ' is-invalid' : '' }}" placeholder="{{ __('Barangay') }}" value="{{ old('barangay') }}" required autofocus>

                                    @if ($errors->has('barangay'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('barangay') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('municipality') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Municipality') }}</label>
                                    <input type="text" name="municipality" id="input-name" class="form-control form-control-alternative{{ $errors->has('municipality') ? ' is-invalid' : '' }}" placeholder="{{ __('Municipality') }}" value="{{ old('municipality') }}" required autofocus>

                                    @if ($errors->has('municipality'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('municipality') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('province') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Province') }}</label>
                                    <input type="text" name="province" id="input-name" class="form-control form-control-alternative{{ $errors->has('province') ? ' is-invalid' : '' }}" placeholder="{{ __('Province') }}" value="{{ old('province') }}" required autofocus>

                                    @if ($errors->has('province'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('province') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('date_reg') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Date Registered') }}</label>
                                    <input type="text" name="date_reg" id="input-name" class="form-control form-control-alternative{{ $errors->has('date_reg') ? ' is-invalid' : '' }}" placeholder="{{ __('Date Registered') }}" value="{{ old('date_reg') }}" required autofocus>

                                    @if ($errors->has('date_reg'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_reg') }}</strong>
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
    @include('layouts.footers.auth')
</div>
</form>

@endsection
