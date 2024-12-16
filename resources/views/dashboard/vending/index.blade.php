@extends('dashboard.master')

@section('content')
    <div class="vending">
        <div class="row g-0 no-gutters">
            <div class="col-md-5">
                <div class="vending-image">
                    <img src="{{ asset('assets/client/images/vending.png') }}" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="vending-text">
                    <h3>Welcome to <span>Vending Management!</span></h3>
                    <p>Get started by adding your vending machines. Click 'Add New Machine' to manage locations and
                        streamline your operations.</p>

                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#vendingModel">Add Vending
                        Machine</button>

                    <div class="modal fade" id="vendingModel" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h3>{{ __('Already Have a Vending') }}
                                    <span>Machine of your Own?</span>
                                </h3>

                                <p>If you already have a vending machine, <span>you can register in Emuna and receive
                                        pre-bookings</span> of
                                    healthy alternatives.</p>

                                <div class="d-flex">
                                    <a href="{{ route('vending.have') }}" class="btn btn-primary flex-grow-1 mr-4">Yes, I
                                        have</a>
                                    <a href="{{ route('vending.dhave') }}" class="btn btn-secondary flex-grow-1 no">No, I
                                        don't</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Model --}}
@endsection
