@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => 'Family Members',
    'class' => 'col-lg-7'
])
<form method="post" action="{{ route('relative.store', request()->route()->parameters) }}" autocomplete="off" enctype="multipart/form-data">
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
                            <div class="row relative">
                                <div class="form-goup d-flex align-items-center w-100">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Full Name</label>
                                            <input type="text" name="full_name[]" id="input-name" class="form-control form-control-alternative" placeholder="Full Name" required autofocus>
                                        </div>
                                    </div>
    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Birthdate</label>
                                            <input type="date" name="birthday[]" id="input-name" class="form-control form-control-alternative" placeholder="" required autofocus>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Relationship</label>
                                            <input type="text" name="relationship[]" id="input-name" class="form-control form-control-alternative" placeholder="Relationship" required autofocus>
                                        </div>
                                    </div>
                                    <a class="add neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-plus text-success" style="font-size: 1.1rem"></i></a>
                                    <a class="neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-trash text-danger" style="font-size: 1.1rem"></i></a>
                                </div>  
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('addInfo.edit', request()->route()->parameters) }}" class="btn btn-primary mt-4"><i class="fas fa-angle-left mr-2"></i>{{ __('Previous') }}</a>
                                <button type="submit" class="btn btn-success mt-4" value="Submit Form">{{ __('Next') }}<i class="fas fa-angle-right ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $(this).on("click", ".add", function(){
         var html = '<div class="form-goup d-flex align-items-center w-100"><div class="col-md-4"><div class="form-group"><label class="form-control-label" for="input-name">Full Name</label><input type="text" name="full_name[]" id="input-name" class="form-control form-control-alternative" placeholder="Full Name" required autofocus></div></div><div class="col-md-4"><div class="form-group"><label class="form-control-label" for="input-name">Birthdate</label><input type="date" name="birthday[]" id="input-name" class="form-control form-control-alternative" placeholder="" required autofocus></div></div><div class="col-md-3"><div class="form-group"><label class="form-control-label" for="input-name">Relationship</label><input type="text" name="relationship[]" id="input-name" class="form-control form-control-alternative" placeholder="Relationship" required autofocus></div></div><a class="add neu-effect d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-plus text-success" style="font-size: 1.1rem"></i></a><a class="neu-effect remove d-flex justify-content-center align-items-center mr-2 text-decoration-none px-3" style="display:inline-block; height: 50px;"><i class="fas fa-trash text-danger" style="font-size: 1.1rem"></i></a></div>'
        $('.relative').append(html);
      });
      $(this).on("click", ".remove", function(){
        var target_input = $(this).parent();
          target_input.remove();
      });
    });
  </script>

@endsection
