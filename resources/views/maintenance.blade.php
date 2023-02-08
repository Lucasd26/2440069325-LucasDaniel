@extends('layouts.master')

@section('title', 'Maintenance')

@section('content')
    @include('layouts.navbar')
    <section>
        <div class="table-responsive">
            <table class="table align-middle bg-dark text-light border border-light border-2">
                <thead>
                    <tr>
                        <th scope="col" class="text-end">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row" class="text-end">{{ $loop->index + 1 }}</th>
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $user->role }}</td>
                            <td class="text-center">
                                <a href="/maintenance/{{ $user->id }}/delete" class="btn btn-sm btn-link text-light"
                                    data-ripple-color="dark">
                                    <i class="fas fa-eraser"></i> Delete
                                </a>
                                <a href="/maintenance/{{ $user->id }}" class="btn btn-sm btn-link text-light"
                                    data-ripple-color="dark">
                                    <i class="fas fa-edit"></i> Update
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
