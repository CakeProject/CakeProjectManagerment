@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Deshboad</div>
				<div class="panel-body">
					<form method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Enter Name ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="input" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="input" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" required>

                                @if ($errors->has('designation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="profile_pic" class=" {{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="profile_pic" required>

                                @if ($errors->has('profile_pic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Profile') }}
                                </button>

                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection