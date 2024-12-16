@extends('dashboard.master')

@section('content')
    <div class="booking">
        <div class="booking-home">
            <div class="row">
                <div class="col-md-6">
                    <div class="image">
                        <div class="overlay d-flex align-items-center">
                            <img src="{{ asset('assets/client/images/booking1.png') }}" alt="Booking">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="text">
                        <h3>Welcome to <span>
                                Bookings Management!</span></h3>
                        <p>Add your vending machine and configure it for use. Follow the video guide, and use the
                            checklist
                            below for each step.</p>

                        <ul>
                            <li><span>Basic Details:</span> Enter machine name, model, and a quick description to
                                identify
                                it.</li>

                            <li><span>Operational Info:</span> Set up machine status, maintenance schedule, and upload
                                any
                                necessary documents.</li>

                            <li><span>Location & Hours:</span> Provide the exact location and set the opening
                                hours to inform customers.</li>

                            <li><span>Configure Settings:</span> Confirm final details, review preferences,
                                and activate your machine for pre-booking.</li>

                            <li><span>Basic Details: </span> Enter machine name, model, and a quick description to
                                identify
                                it.</li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-grid mt-3">
                                <a href="{{ route('booking.slot') }}" class="btn d-block">Book Slots</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
