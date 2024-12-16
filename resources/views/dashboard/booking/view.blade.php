@extends('dashboard.master')

@section('content')
    <div class="booking mt-2">
        <div class="booking-slot">
            <div class="row">
                <div class="col-md-12">
                    <div class="slot-booking-view">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="booking-details-tab" data-toggle="tab" href="#booking-details"
                                    role="tab" aria-controls="booking-details" aria-selected="true">Booking Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-details-tab" data-toggle="tab" href="#product-details"
                                    role="tab" aria-controls="product-details" aria-selected="false">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-data-tab" data-toggle="tab" href="#sales-data" role="tab"
                                    aria-controls="sales-data" aria-selected="false">Sales Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="payment-info-tab" data-toggle="tab" href="#payment-info"
                                    role="tab" aria-controls="payment-info" aria-selected="false">Payment
                                    Information</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="booking-details" role="tabpanel"
                                aria-labelledby="booking-details-tab">
                                @include('dashboard.booking.view-tab.tab1')
                            </div>
                            <div class="tab-pane fade" id="product-details" role="tabpanel"
                                aria-labelledby="product-details-tab">
                                <!-- Content for Product Details tab -->
                                @include('dashboard.booking.view-tab.tab2')
                            </div>
                            <div class="tab-pane fade" id="sales-data" role="tabpanel" aria-labelledby="sales-data-tab">
                                <!-- Content for Sales Data tab -->
                                @include('dashboard.booking.view-tab.tab3')
                            </div>
                            <div class="tab-pane fade" id="payment-info" role="tabpanel" aria-labelledby="payment-info-tab">
                                <!-- Content for Payment Information tab -->
                                @include('dashboard.booking.view-tab.tab4')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
