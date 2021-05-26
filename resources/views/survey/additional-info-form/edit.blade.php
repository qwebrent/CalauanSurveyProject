@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Additional Information'),
    'class' => 'col-lg-7'
])

<form method="post" action="{{ route('addInfo.update', $resident->id) }}" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
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
                                    <input type="text" name="school_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name of School') }}" value="{{ $resident->education->school_name }}" required autofocus>

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
                                    <input type="text" name="school_address" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_address') ? ' is-invalid' : '' }}" placeholder="{{ __('School Address') }}" value="{{ $resident->education->school_address }}" required autofocus>

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
                                    <input type="text" name="course" id="input-name" class="form-control form-control-alternative{{ $errors->has('course') ? ' is-invalid' : '' }}" placeholder="{{ __('Course') }}" value="{{ $resident->education->course }}" required autofocus>

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
                                    <input type="text" name="level" id="input-name" class="form-control form-control-alternative{{ $errors->has('level') ? ' is-invalid' : '' }}" placeholder="{{ __('e.g. College, High School') }}" value="{{ $resident->education->level }}" required autofocus>

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
                                    <input type="text" name="school_year" id="input-name" class="form-control form-control-alternative{{ $errors->has('school_year') ? ' is-invalid' : '' }}" placeholder="{{ __('School Year') }}" value="{{ $resident->education->school_year }}" required autofocus>

                                    @if ($errors->has('school_year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school_year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- TODO:WorkExperience--}}
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">{{ __('Work Experience') }}</h6>
                        <div class="row work">
                            @foreach ($resident->experiences as $experience)
                            <div class="form-group w-100 d-flex align-items-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Job Type</label>
                                        <input type="text" name="job_type[]" id="input-name" class="form-control form-control-alternative" placeholder="Job Type" value="{{ $experience->job_type }}"  required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Position</label>
                                        <input type="text" name="position[]" id="input-name" class="form-control form-control-alternative" placeholder="Position" value="{{ $experience->position }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Year From</label>
                                        <input type="text" name="year_from[]" id="input-name" class="form-control form-control-alternative" placeholder="From:" value="{{ $experience->year_from }}" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Year To</label>
                                        <input type="text" name="year_to[]" id="input-name" class="form-control form-control-alternative" placeholder="To:" value="{{ $experience->year_to }}" required autofocus>
    
                                    </div>
                                </div>

                                <a class="add neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-plus text-success" style="font-size: 1.1rem"></i></a>
                                <a class="neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-trash text-danger" style="font-size: 1.1rem"></i></a>
                            </div>
                            @endforeach
                        </div>
                        {{-- TODO:Workxperience--}}
                        <hr class="my-4" />
                        <h6 class="heading-small text-muted mb-4">{{ __('Household') }}</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group{{ $errors->has('yearnow') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Year Today') }}</label>
                                    <input type="text" name="yearnow" id="input-name" class="form-control form-control-alternative{{ $errors->has('yearnow') ? ' is-invalid' : '' }}" placeholder="{{ now()->year }}" value="{{ $resident->household->yearnow }}" required autofocus>

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
                                    <input type="text" name="owner" id="input-name" class="form-control form-control-alternative{{ $errors->has('owner') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner\'s Name') }}" value="{{ $resident->household->owner }}" required autofocus>

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
                                    <input type="text" name="lot" id="input-name" class="form-control form-control-alternative{{ $errors->has('lot') ? ' is-invalid' : '' }}" placeholder="{{ __('Lot') }}" value="{{ $resident->household->lot}}" required autofocus>

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
                                    <input type="text" name="street" id="input-name" class="form-control form-control-alternative{{ $errors->has('street') ? ' is-invalid' : '' }}" placeholder="{{ __('Street') }}" value="{{ $resident->household->street }}" required autofocus>

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
                                    <input type="text" name="purok" id="input-name" class="form-control form-control-alternative{{ $errors->has('purok') ? ' is-invalid' : '' }}" placeholder="{{ __('Purok') }}" value="{{ $resident->household->purok }}" required autofocus>

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
                                    <input type="text" name="barangay" id="input-name" class="form-control form-control-alternative{{ $errors->has('barangay') ? ' is-invalid' : '' }}" placeholder="{{ __('Barangay') }}" value="{{ $resident->household->barangay }}" required autofocus>

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
                                    <input type="text" name="municipality" id="input-name" class="form-control form-control-alternative{{ $errors->has('municipality') ? ' is-invalid' : '' }}" placeholder="{{ __('Municipality') }}" value="{{ $resident->household->municipality }}" required autofocus>

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
                                    <input type="text" name="province" id="input-name" class="form-control form-control-alternative{{ $errors->has('province') ? ' is-invalid' : '' }}" placeholder="{{ __('Province') }}" value="{{ $resident->household->province }}" required autofocus>

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
                                    <input type="text" name="date_reg" id="input-name" class="form-control form-control-alternative{{ $errors->has('date_reg') ? ' is-invalid' : '' }}" placeholder="{{ __('Date Registered') }}" value="{{ $resident->household->date_reg}}" required autofocus>

                                    @if ($errors->has('date_reg'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_reg') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('residence.edit', request()->route()->parameters) }}" class="btn btn-primary mt-4"><i class="fas fa-angle-left mr-2"></i>{{ __('Previous') }}</a>
                            <button type="submit" class="btn btn-success mt-4" value="Submit Form">{{ __('Next') }}<i class="fas fa-angle-right ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $(this).on("click", ".add", function(){
         var html = '<div class="form-group w-100 d-flex align-items-center"><div class="col-md-4"><div class="form-group"><label class="form-control-label" for="input-name">Job Type</label><input type="text" name="job_type[]" id="input-name" class="form-control form-control-alternative" placeholder="Job Type"  required autofocus></div></div><div class="col-md-3"><div class="form-group"><label class="form-control-label" for="input-name">Position</label><input type="text" name="position[]" id="input-name" class="form-control form-control-alternative" placeholder="position[]" required autofocus></div></div><div class="col-md-2"><div class="form-group"><label class="form-control-label" for="input-name">Year From</label><input type="text" name="year_from[]" id="input-name" class="form-control form-control-alternative" placeholder="From:" required autofocus></div></div><div class="col-md-2"><div class="form-group"><label class="form-control-label" for="input-name">Year To</label><input type="text" name="year_to[]" id="input-name" class="form-control form-control-alternative" placeholder="To:" required autofocus></div></div><a class="add neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-plus text-success" style="font-size: 1.1rem"></i></a><a class="neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3 remove" style="display:inline-block; height: 50px;"><i class="fas fa-trash text-danger" style="font-size: 1.1rem"></i></a></div>'
        $('.work').append(html);
      });
      $(this).on("click", ".remove", function(){
        var target_input = $(this).parent();
          target_input.remove();
      });
    });
  </script>
@endsection
