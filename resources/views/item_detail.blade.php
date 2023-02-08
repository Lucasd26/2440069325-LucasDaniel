@extends('layouts.master')

@section('title', 'Item Detail')
@section('css')
    <style>
        img {
            max-width: 250px;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    @include('layouts.navbar')
    <section>
        <div class="row bg-dark border border-light border-2 rounded mb-3 mx-2">
            <!--Grid column-->
            <div class="col-md-4 my-4 ps-md-5 pe-md-0 d-flex flex-column align-items-center justify-content-center">
                <img class="shadow rounded img-fluid " src="{{ $item->image_link }}" alt="{{ $item->name }}">
                {{-- <h3 class="text-white mb-0 pt-3">{{ $item->price }}</h3> --}}
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <!--Content-->
                <div class="p-4">
                    <h1 class="display-6 text-light mb-0 pt-3">{{ $item->name }}</h1>
                    <p class="lead border-bottom text-light ms-1" style="font-size: 20px;">
                        Price: Rp{{ number_format($item->price, 2) }},-
                    </p>

                    <p class="text-light ms-1" style="text-align: justify;">{{ $item->desc }}</p>

                    <form class="d-flex justify-content-left">
                        <a href="/cart/add/{{ $item->id }}" class="btn btn-outline-light">
                            Add to cart
                            <i class="fas fa-shopping-cart ms-1"></i>
                        </a>
                    </form>
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </section>
@endsection
