@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="create-product">
            <div class="form">
                <div class="create-slot-head">
                    <div class="header-text">
                        <h4>{{ __('Add Product') }}</h4>
                    </div>

                    <div class="step-container">
                        <div class="step-indicators">

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle active">1</div>
                                <div class="step-name">Product Information</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">2</div>
                                <div class="step-name">Specifications</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">3</div>
                                <div class="step-name">Offline Locations</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">4</div>
                                <div class="step-name">Delivery Options </div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">5</div>
                                <div class="step-name">Review & Confirmation</div>
                            </div>

                        </div>
                        <div class="progress add-product">
                            <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <form id="" class="multistep-form">

                    {{-- Product Information --}}
                    <div class="form-step active">

                        @include('dashboard.product.step.step1')

                        <button type="button" class="btn next ml-2 mt-4">Continue</button>
                    </div>
                    {{-- Product Information End --}}

                    {{-- Specifications --}}
                    <div class="form-step">

                        @include('dashboard.product.step.step2')

                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Continue</button>
                    </div>
                    {{-- Specifications End --}}


                    {{-- Offline Locations --}}

                    <div class="form-step">
                        @include('dashboard.product.step.step3')

                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Continue</button>
                    </div>

                    {{-- Offline Locations End --}}


                    {{-- Delivery Options --}}
                    <div class="form-step">
                        @include('dashboard.product.step.step4')

                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Continue</button>
                    </div>
                    {{-- Delivery Options End --}}


                    {{-- Review & Confirmation --}}
                    <div class="form-step">
                        @include('dashboard.product.step.step5')

                        <a class="btn next ml-2 mt-4" data-toggle="modal" data-target="#completeModal">Complete</a>

                    </div>
                    {{-- Review & Confirmation End --}}

                </form>
            </div>
        </div>
    </div>


    {{-- Modal --}}

    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 50%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmed">
                    <div class="booking-confirmed-left">
                        <div class="confirmed-image">
                            <img src="{{ asset('assets/client/images/signup-finished.png') }}" alt="">
                        </div>
                    </div>
                    <div class="booking-confirmed-right">
                        <div class="comfirmed-text">
                            <h4>Your Product is Added</h4>
                            <p>Thank you.
                                <span>You’ll receive further updates soon.</span>
                            </p>

                            <ul>
                                <li><span>Product ID:</span> 123456</li>
                                <li><span>Product name:</span> Choco Bites Energy Bar</li>
                                <li><span>Price:</span> $20.00</li>
                                <li><span>Barcode:</span> 1234567890</li>
                            </ul>
                            <a href="{{ route('product') }}" class="btn w-100">Back to Pending Bookings</a>
                        </div>
                    </div>
                </div>
                <div class="modal-close-button">
                    <a href="#" class="close-modal-btn" data-dismiss="modal"><img
                            src="{{ asset('assets/client/images/icon/close.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal End --}}
@endsection
