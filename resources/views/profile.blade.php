@extends('layouts.master')

@section('title', 'Profile')

@section('content')
    @include('layouts.navbar')
    <section>
        <div class="row bg-dark border border-light border-2 rounded mb-3 mx-2">
            <!--Grid column-->
            <div class="col-md-4 my-4 ps-md-5 d-flex flex-column align-items-center justify-content-center">
                <img class="shadow rounded img-fluid " src="{{ $user->avatar_link }}" alt="avatar">
                {{-- <h3 class="text-white mb-0 pt-3">{{ $item->price }}</h3> --}}
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-8 my-4 pe-md-5">
                <!--Content-->
                <form method="POST" action="/profile/update" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="first_name" class="form-label text-light">{{ __('First Name') }}</label>
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ $user->first_name }}" autofocus>

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
                                value="{{ $user->last_name }}">

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $user->email }}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="role" class="form-label text-light">{{ __('Role') }}</label>
                            <select id="role" class="form-select @error('role') is-invalid @enderror" name="role_id"
                                @if (!Auth::user()->isAdministrator()) disabled @endif value="{{ old('role') }}">
                                @php
                                    $roles = App\Models\Role::all();
                                    $genders = App\Models\Gender::all();
                                    $i = 0;
                                @endphp
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if ($role->id == $user->role_id) selected @endif>
                                        {{ $role->name }}
                                    </option>
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
                                        <input id="gender-{{ $i }}" value="{{ $gender->id }}" type="radio"
                                            name="gender_id" class="form-check-input @error('gender') is-invalid @enderror"
                                            value="{{ old('gender') }}" @if ($i == $user->gender_id) checked @endif>
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
                                class="form-control @error('avatar') is-invalid @enderror" name="avatar_link">
                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                            <input id="password" type="password" autocomplete="new-password" placeholder="**********"
                                class="form-control @error('password') is-invalid @enderror" name="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="password-confirm"
                                class="form-label text-light">{{ __('Password Confirm') }}</label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="**********"
                                name="password_confirmation">
                        </div>
                        <div class="col-12 mt-2 text-center">
                            <button type="submit" class="btn btn-outline-light">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </section>
@endsection
