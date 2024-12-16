@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="create-slot">
            <div class="form">
                <div class="create-slot-head">
                    <div class="header-text">
                        <h4>{{ __('Progress Bar') }}</h4>
                    </div>

                    <div class="step-container">
                        <div class="step-indicators">

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle active">1</div>
                                <div class="step-name">Select Product</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">2</div>
                                <div class="step-name">Choose Plan</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">3</div>
                                <div class="step-name">Choose Location</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">4</div>
                                <div class="step-name">Manage Slots</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">5</div>
                                <div class="step-name">Invoicing & payments</div>
                            </div>

                            <div class="step d-flex flex-column align-items-center">
                                <div class="circle">6</div>
                                <div class="step-name">Order Confirmation</div>
                            </div>

                        </div>
                        <div class="progress">
                            <div class="progress-bar" id="progress" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <form id="" class="multistep-form">


                    {{-- Product Information --}}
                    <div class="form-step active">
                        @include('dashboard.booking.step.step1')

                        <button type="button" class="btn next ml-2 mt-4">Next</button>
                    </div>
                    {{-- Product Information End --}}

                    {{-- Booking Plan Information --}}
                    <div class="form-step">

                        @include('dashboard.booking.step.step2')

                        <button type="button" class="btn prev my-4">Back</button>
                    </div>
                    {{-- Booking Plan Information End --}}




                    {{-- Choose Location --}}

                    <div class="form-step">
                        @include('dashboard.booking.step.step3')

                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Next</button>
                    </div>

                    {{-- Choose Location End --}}

                    {{-- Manage Slots --}}
                    <div class="form-step">
                        @include('dashboard.booking.step.step4')

                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Next</button>
                    </div>
                    {{-- Manage Slots End --}}

                    {{-- Invoice Payment --}}
                    <div class="form-step">
                        @include('dashboard.booking.step.step5')


                        <button type="button" class="btn prev mt-4">Back</button>
                        <button type="button" class="btn  next ml-2 mt-4">Next</button>
                    </div>
                    {{-- Invoice Payment End --}}


                    {{-- Confirmation --}}
                    <div class="form-step">
                        @include('dashboard.booking.step.step6')

                        <a href="{{ route('booking.index') }}" class="btn next ml-2 mt-4">Complete</a>
                    </div>
                    {{-- Confirmation End --}}

                </form>
            </div>
        </div>
    </div>


    {{-- Modal --}}

    {{-- Modal End --}}
@endsection
