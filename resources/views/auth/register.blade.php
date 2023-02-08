@extends('layouts.master')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark border border-light border-2 my-5">
                <div class="card-header border-bottom border-light border-2 text-light text-center">
                    {{ __('Register') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 form-group">
                                <label for="first_name" class="form-label text-light">{{ __('First Name') }}</label>
                                <input id="first_name" type="text"
                                    class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                    value="{{ old('first_name') }}" required autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="last_name" class="form-label text-light">{{ __('Last Name') }}</label>
                                <input id="last_name" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                    value="{{ old('last_name') }}" required>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                                <input id="email" type="email" autocomplete="new-email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="role" class="form-label text-light">{{ __('Role') }}</label>
                                <select id="role" class="form-select @error('role') is-invalid @enderror"
                                    name="role_id" value="{{ old('role') }}" required>
                                    @php
                                        $roles = App\Models\Role::all();
                                        $genders = App\Models\Gender::all();
                                        $i = 0;
                                    @endphp
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="gender" class="form-label text-light">{{ __('Gender') }}</label>

                                <div id="gender">
                                    @foreach ($genders as $gender)
                                        <div class="form-check form-check-inline">
                                            <label for="gender-{{ ++$i }}" class="form-check-label text-light">
                                                {{ __($gender->desc) }}
                                            </label>
                                            <input id="gender-{{ $i }}" value="{{ $gender->id }}"
                                                type="radio" name="gender_id"
                                                class="form-check-input @error('gender') is-invalid @enderror"
                                                value="{{ old('gender') }}" required
                                                @if ($i == 1) checked @endif>
                                        </div>
                                    @endforeach
                                </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="avatar" class="form-label text-light">{{ __('Display Picture') }}</label>
                                <input id="avatar" type="file" accept=".jpg, .png, .jpeg"
                                    class="form-control @error('avatar') is-invalid @enderror" name="avatar_link"
                                    value="{{ old('avatar') }}" required>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                                <input id="password" type="password" autocomplete="new-password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="password-confirm"
                                    class="form-label text-light">{{ __('Password Confirm') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                            <div class="col-12 my-2 mt-3 text-center">
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
