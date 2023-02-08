@extends('layouts.master')

@section('title', 'Home')
@section('css')
    <style>
        .page-link .disabled {
            color: #262626 !important;
        }

        .page-item {
            margin-left: 5px;
            margin-right: 5px;
        }

        img {
            min-height: 140px;
            max-height: 140px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    @include('layouts.navbar')
    <section>
        <div class="text-center">
            <div class="row row-cols-lg-5">

                @foreach ($items as $item)
                    <div class="col mb-4">
                        <div class="card bg-dark border border-light border-2">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <img src="{{ $item->image_link }}" class="w-100" />
                                <a href="/item_detail/{{ $item->id }}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="/item_detail/{{ $item->id }}" class="text-reset">
                                    <h5 class="card-title mb-3 text-light">{{ $item->name }}</h5>
                                </a>
                                <a href="/item_detail/{{ $item->id }}" class="btn btn-outline-light">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{ $items->links() }}
@endsection
