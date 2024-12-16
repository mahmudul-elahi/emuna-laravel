@extends('dashboard.master')

@section('content')
    <div class="booking mt-2">
        <div class="booking-slot">
            <div class="row">
                <div class="col-md-12">
                    <div class="booking-timeline">
                        <div class="timeline-select d-flex justify-content-between align-items-center" class="form-select">
                            <div class="left">
                                <h3>Booking Timeline - 2024</h3>
                            </div>
                            <div class="right d-flex">
                                <div>
                                    <select class="form-control" name="localtion" id="">
                                        <option value="">Choose Location</option>
                                        <option value="">Location 1</option>
                                        <option value="">Location 2</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-control ml-3" name="month" id="">
                                        <option value="">Jan-Feb</option>
                                        <option value="">Feb-Mar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- TimeLine Col --}}
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row text-center month">
                                    <div class="col">Jan</div>
                                    <div class="col">Feb</div>
                                    <div class="col">Mar</div>
                                    <div class="col">Apr</div>
                                    <div class="col">May</div>
                                    <div class="col">Jun</div>
                                    <div class="col">Jul</div>
                                    <div class="col">Aug</div>
                                    <div class="col">Sep</div>
                                    <div class="col">Oct</div>
                                    <div class="col">Nov</div>
                                    <div class="col">Dec</div>
                                </div>

                                <div class="row">
                                    {{-- 3 Months --}}
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E8F0FB;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #FEF7EA;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #FEF7EA;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E9F6F3;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="timeline-card mb-4" style="--bg-color: #E9F6F3;">
                                                    <div class="d-flex align-items-center gap-3 top">
                                                        <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                            alt="">
                                                        <h6 class="ml-2">Vendor Machine Location</h6>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between bottom">
                                                        <p>Timeline: 10 Jan - 24 Feb</p>
                                                        <div class="image d-flex gap-1">
                                                            <div class="image-container mr-1">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="image-container">
                                                                <img style="height: 16px;"
                                                                    src="{{ asset('assets/client/images/cola.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
