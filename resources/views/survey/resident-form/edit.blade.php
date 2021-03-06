@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Resident Information'),
    'class' => 'col-lg-7'
])

<form method="post" action="{{ route('residence.update', $resident->id) }}" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
    @csrf

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-2 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <div class="row justify-content-center">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('/argon/img/theme/profile.png');">
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="card-body pt-0 pt-md-4">

                    <div class="text-center">
                        <h3>
                            {{ __('Upload Photo') }}<span class="font-weight-light"></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-10 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <h3 class="col-12 mb-0">{{ __('Enter Data') }}</h3>
                    </div>
                </div>
                <div class="card-body">



                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-lg-0">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('unique_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Resident ID') }}</label>
                                        <input type="text" name="unique_id" id="input-name" class="form-control form-control-alternative{{ $errors->has('unique_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Resident ID') }}" value="{{ $resident->unique_id }}" required autofocus>

                                        @if ($errors->has('unique_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('unique_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">{{ __('Resident information') }}</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('yearnow') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Year Today') }}</label>
                                        <input type="text" name="yearnow" id="input-name" class="form-control form-control-alternative{{ $errors->has('yearnow') ? ' is-invalid' : '' }}" placeholder="{{ now()->year }}" value="{{ $resident->yearnow }}" required autofocus>

                                        @if ($errors->has('yearnow'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('yearnow') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('jobstatus') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Job Status') }}</label>
                                        <input type="text" name="jobstatus" id="input-name" class="form-control form-control-alternative{{ $errors->has('jobstatus') ? ' is-invalid' : '' }}" placeholder="{{ __('e.g. Employed, Self-Employed') }}" value="{{ $resident->job_status}}" required autofocus>

                                        @if ($errors->has('jobstatus'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('jobstatus') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Email Address') }}</label>
                                        <input type="text" name="email" id="input-name" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('example@gmail.com') }}" value="{{ $resident->email }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('lname') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Last Name') }}</label>
                                        <input type="text" name="lname" id="input-name" class="form-control form-control-alternative{{ $errors->has('lname') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}" value="{{ $resident->lname }}" required autofocus>

                                        @if ($errors->has('lname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('fname') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('First Name') }}</label>
                                        <input type="text" name="fname" id="input-name" class="form-control form-control-alternative{{ $errors->has('fname') ? ' is-invalid' : '' }}" placeholder="{{ __('First Name') }}" value="{{ $resident->fname }}" required autofocus>

                                        @if ($errors->has('fname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('mname') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Middle Name') }}</label>
                                        <input type="text" name="mname" id="input-name" class="form-control form-control-alternative{{ $errors->has('mname') ? ' is-invalid' : '' }}" placeholder="{{ __('Middle Name') }}" value="{{ $resident->mname }}" required autofocus>

                                        @if ($errors->has('mname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('mname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('blood_type') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Blood Type') }}</label>
                                        <select class="form-control form-control-alternative" name="blood_type" id="blood_type">
                                            <option value="A+" {{ $resident->blood_type == 'A+' ? 'selected' : '' }}>A+</option>
                                            <option value="O+" {{ $resident->blood_type == 'O+' ? 'selected' : '' }}>O+</option>
                                            <option value="B+" {{ $resident->blood_type == 'B+' ? 'selected' : '' }}>B+</option>
                                            <option value="AB+" {{ $resident->blood_type == 'AB+' ? 'selected' : '' }}>AB+</option>
                                            <option value="A-" {{ $resident->blood_type == 'A-' ? 'selected' : '' }}>A-</option>
                                            <option value="O-" {{ $resident->blood_type == 'O-' ? 'selected' : '' }}>O-</option>
                                            <option value="B-" {{ $resident->blood_type == 'B-' ? 'selected' : '' }}>B-</option>
                                            <option value="AB-" {{ $resident->blood_type == 'AB-' ? 'selected' : '' }}>AB-</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('birthplace') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Birthplace') }}</label>
                                        <input type="text" name="birthplace" id="input-name" class="form-control form-control-alternative{{ $errors->has('birthplace') ? ' is-invalid' : '' }}" placeholder="{{ __('Birthplace') }}" value="{{ $resident->birthplace}}" required autofocus>

                                        @if ($errors->has('birthplace'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('birthplace') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('b_day') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Birthdate') }}</label>
                                        <input type="date" name="b_day" id="input-name" class="form-control form-control-alternative{{ $errors->has('b_day') ? ' is-invalid' : '' }}" placeholder="" value="{{ $resident->birthday }}" required autofocus>

                                        @if ($errors->has('b_day'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('b_day') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('religion') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Religion') }}</label>
                                        <input type="text" name="religion" id="input-name" class="form-control form-control-alternative{{ $errors->has('religion') ? ' is-invalid' : '' }}" placeholder="{{ __('Religion') }}" value="{{ $resident->religion }}" required autofocus>

                                        @if ($errors->has('religion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('religion') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Gender') }}</label>
                                        <select class="form-control form-control-alternative" name="gender" id="gender">
                                            <option value="Male" {{ $resident->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $resident->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('civstatus_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Civil Status') }}</label>
                                        <select class="form-control form-control-alternative" name="civstatus" id="civstatus_id">
                                            <option value="Single" {{ $resident->civil_status == "Single" ? 'selected' : '' }}>Single</option>
                                            <option value="Married" {{ $resident->civil_status == "Married" ? 'selected' : '' }}>Married</option>
                                            <option value="Divorced" {{ $resident->civil_status == "Divorced" ? 'selected' : '' }}>Divorced</option>
                                            <option value="Widowed" {{ $resident->civil_status == "Widowed" ? 'selected' : '' }}>Widowed</option>
                                            <option value="Separated" {{ $resident->civil_status == "Separated" ? 'selected' : '' }}>Separated</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('citizenship') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Citizenship') }}</label>
                                        <input type="text" name="citizenship" id="input-name" class="form-control form-control-alternative{{ $errors->has('citizenship') ? ' is-invalid' : '' }}" placeholder="{{ __('Citizenship') }}" value="{{ $resident->citizenship }}" required autofocus>

                                        @if ($errors->has('citizenship'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('citizenship') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('height') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Height') }}</label>
                                        <input type="text" name="height" id="input-name" class="form-control form-control-alternative{{ $errors->has('height') ? ' is-invalid' : '' }}" placeholder="{{ __('Height') }}" value="{{ $resident->height }}" required autofocus>

                                        @if ($errors->has('height'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('height') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('weight') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Weight') }}</label>
                                        <input type="text" name="weight" id="input-name" class="form-control form-control-alternative{{ $errors->has('weight') ? ' is-invalid' : '' }}" placeholder="{{ __('Weight') }}" value="{{ $resident->weight }}" required autofocus>

                                        @if ($errors->has('weight'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('weight') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('voters_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Voters ID') }}</label>
                                        <input type="text" name="voters_id" id="input-name" class="form-control form-control-alternative{{ $errors->has('voters_id') ? ' is-invalid' : '' }}" placeholder="Voters ID" value="{{ $resident->voters_id }}" required autofocus>

                                        @if ($errors->has('voters_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('voters_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('contact_no') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Contact No.') }}</label>
                                        <input type="text" name="contact_no" id="input-name" class="form-control form-control-alternative{{ $errors->has('contact_no') ? ' is-invalid' : '' }}" placeholder="Contact No." value="{{ $resident->contact_no }}" required autofocus>

                                        @if ($errors->has('contact_no'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('contact_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">{{ __('Address') }}</h6>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('block') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Block') }}</label>
                                            <input type="text" name="block" id="input-name" class="form-control form-control-alternative{{ $errors->has('block') ? ' is-invalid' : '' }}" placeholder="{{ __('Block') }}" value="{{ $resident->block }}" autofocus>

                                            @if ($errors->has('block'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('block') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('lot') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Lot') }}</label>
                                            <input type="text" name="lot" id="input-name" class="form-control form-control-alternative{{ $errors->has('lot') ? ' is-invalid' : '' }}" placeholder="{{ __('Lot') }}" value="{{ $resident->lot }}" autofocus>

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
                                            <input type="text" name="street" id="input-name" class="form-control form-control-alternative{{ $errors->has('street') ? ' is-invalid' : '' }}" placeholder="{{ __('Street') }}" value="{{ $resident->street }}" required autofocus>

                                            @if ($errors->has('street'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('street') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('barangay_id') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Barangay') }}</label>
                                            <select class="form-control form-control-alternative" name="barangay" id="barangay_id">

                                                @foreach ($barangays as $barangay)
                                                    <option value="{{ $barangay->id }}" {{ $resident->barangay == $barangay->id ? 'selected' : '' }}>{{ $barangay->barangay }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('municipality') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Municipality') }}</label>
                                            <input type="text" name="municipality" id="input-name" class="form-control form-control-alternative{{ $errors->has('municipality') ? ' is-invalid' : '' }}" placeholder="{{ __('Municipality') }}" value="{{ $resident->municipality }}" required autofocus>

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
                                            <input type="text" name="province" id="input-name" class="form-control form-control-alternative{{ $errors->has('province') ? ' is-invalid' : '' }}" placeholder="{{ __('Province') }}" value="{{ $resident->province }}" required autofocus>

                                            @if ($errors->has('province'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('province') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">{{ __('Spouse') }}</h6>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('slname') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Spouse Last Name') }}</label>
                                            <input type="text" name="slname" id="input-name" class="form-control form-control-alternative{{ $errors->has('slname') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}" value="{{ $resident->slname }}" autofocus>

                                            @if ($errors->has('slname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('slname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('sfname') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Spouse First Name') }}</label>
                                            <input type="text" name="sfname" id="input-name" class="form-control form-control-alternative{{ $errors->has('sfname') ? ' is-invalid' : '' }}" placeholder="{{ __('First Name') }}" value="{{ $resident->sfname }}" autofocus>

                                            @if ($errors->has('fname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sfname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('smname') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Middle Name') }}</label>
                                            <input type="text" name="smname" id="input-name" class="form-control form-control-alternative{{ $errors->has('smname') ? ' is-invalid' : '' }}" placeholder="{{ __('Middle Name') }}" value="{{ $resident->smname }}" autofocus>

                                            @if ($errors->has('smname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('smname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group{{ $errors->has('sbirthday') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Spouse Birthdate') }}</label>
                                            <input type="date" name="sbirthday" id="input-name" class="form-control form-control-alternative{{ $errors->has('sbirthday') ? ' is-invalid' : '' }}" placeholder="" value="{{ $resident->sbirthday }}" autofocus>

                                            @if ($errors->has('sbirthday'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sbirthday') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">{{ __('Other') }}</h6>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('business_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Business Name') }}</label>
                                            <input type="text" name="business_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('business_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Leave blank if not applicable') }}" value="{{ $resident->business_name }}" autofocus>

                                            @if ($errors->has('business_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('business_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('monthly_income') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Monthly Income') }}</label>
                                            <input type="text" name="monthly_income" id="input-name" class="form-control form-control-alternative{{ $errors->has('monthly_income') ? ' is-invalid' : '' }}" placeholder="{{ __('Monthly Income') }}" value="{{ $resident->monthly_income }}" required autofocus>

                                            @if ($errors->has('monthly_income'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('monthly_income') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" />

                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('surveyor') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">{{ __('Surveyor') }}</label>
                                            <input type="text" name="surveyor" id="input-name" class="form-control form-control-alternative{{ $errors->has('surveyor') ? ' is-invalid' : '' }}" placeholder="" value="{{ $resident->surveyor }}" required autofocus>

                                            @if ($errors->has('surveyor'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('surveyor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-primary mt-4"><i class="fas fa-angle-left mr-2"></i>{{ __('Previous') }}</a>
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

@endsection

@section('page_level_scripts')
<script src="{{asset('/js/imageupload.js')}}"></script>
@endsection
