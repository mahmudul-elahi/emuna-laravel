@extends('dashboard.master')

@section('content')
    <div class="product">
        <div class="row g-0 no-gutters">
            <div class="col-md-4">
                <div class="product-image">
                    <img src="{{ asset('assets/client/images/vending.png') }}" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-text">
                    <h3>Welcome to <span>Product Management!</span></h3>
                    <p>Get started by adding your Product. Click 'Add New Product' to start selling on Emuna and give an
                        ultimate boost to your sales.</p>

                    <a href="{{ route('product.add') }}" class="btn btn-outline-dark w-100">Add Products</a>
                </div>
            </div>
        </div>
    </div>


    {{-- Model --}}
@endsection
