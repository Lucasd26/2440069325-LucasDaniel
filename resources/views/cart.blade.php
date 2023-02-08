@extends('layouts.master')

@section('title', 'Cart')

@section('content')
    @include('layouts.navbar')
    <section>
        <div class="table-responsive">
            <table class="table align-middle bg-dark text-light border border-light border-2">
                <thead>
                    <tr>
                        <th scope="col" class="text-end">#</th>
                        <th scope="col" class="text-center">Preview</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row" class="text-end">{{ $loop->index + 1 }}</th>
                            <td class="text-center">
                                <img src="{{ $item->image_link }}" alt="{{ $item->name }}"
                                    style="width: 45px; height: 45px; object-fit: cover" class="rounded-circle" />
                            </td>
                            <td>{{ $item->name }}</td>
                            <td class="text-center">Rp{{ number_format($item->price, 2) }},-</td>
                            <td class="text-center">
                                <a href="/cart/delete/{{ $item->cart_id }}" class="btn btn-sm btn-link text-light"
                                    data-ripple-color="dark">
                                    <i class="fas fa-eraser"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($total > 0)
            <nav class="bg-dark border border-light border-2 rounded py-2 my-3">
                <!-- Container wrapper -->
                <div class="container-fluid ">
                    <!-- Collapsible wrapper -->
                    <div class="d-flex align-items-center justify-content-around py-2">
                        <!-- Left links -->
                        <h3 class="text-light mb-0">
                            Total: Rp{{ number_format($total, 2) }},-
                        </h3>

                        <a href="/cart/checkout" class="btn btn-outline-light">
                            Checkout
                        </a>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
        @endif
    </section>
@endsection
