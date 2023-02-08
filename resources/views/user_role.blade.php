@extends('layouts.master')

@section('title', 'Maintenance')

@section('content')
    @include('layouts.navbar')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark border border-light border-2">
                <div class="card-header border-bottom border-light border-2 text-light text-center">
                    {{ __('Update Role') }}</div>

                <div class="card-body">
                    <form method="POST" action="/maintenance/{{ $user->id }}/update">
                        @csrf

                        <div class="row mb-3">
                            <p class="col-md-4 col-form-label text-md-end text-light">
                                Name:
                            </p>
                            <p class="col-md-6 col-form-label text-light">
                                {{ $user->first_name . ' ' . $user->last_name }}
                            </p>
                        </div>

                        <div class="row mb-4">
                            <label for="role"
                                class="col-md-4 col-form-label text-md-end text-light">{{ __('Role') }}</label>
                            <div class="col-md-6">
                                <select id="role" class="form-select @error('role') is-invalid @enderror"
                                    name="role_id" value="{{ old('role') }}">
                                    @php
                                        $roles = App\Models\Role::all();
                                    @endphp
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if ($role->id == $user->role_id) selected @endif>
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
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
