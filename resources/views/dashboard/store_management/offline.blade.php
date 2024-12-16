@extends('dashboard.master')

@section('content')
    <div class="management">
        <div class="management-home">
            <div class="row">
                <div class="col-md-4">
                    <div class="sales-summary">
                        <div class="sales-summary-header">
                            <h4>Sales Summary</h4>
                            <div class="form-group">
                                <select class="custom-select" name="" id="">
                                    <option>This Month</option>
                                    <option>This Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="sales-summary-circle-overview">
                            <div class="pre">
                                <h6>5100</h6>
                                <p>Total Booked
                                    <span class="d-block">Slots</span>
                                </p>
                            </div>
                            <div class="avil">
                                <h6>20</h6>
                                <p>Total Vending
                                    <span class="d-block">Machines</span>
                                </p>
                            </div>
                            <div class="oper">
                                <h6>$53080</h6>
                                <p>Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="booking-slot">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="booking-slot-button d-flex justify-content-between mb-3 mt-0">
                                    <div class="left d-flex align-items-center">
                                        <h3 class="m-0">Best Performing Locations</h3>
                                    </div>
                                    <div class="right d-flex">
                                        <img height="15" class="mr-3"
                                            src="{{ asset('assets/client/images/icon/crown.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="booking-table">

                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Location</th>
                                                    <th>Total Sales</th>
                                                    <th>Units Sold</th>
                                                    <th>Total Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">

                                                <tr>
                                                    <td>New York</td>
                                                    <td>$10,000</td>
                                                    <td>200</td>
                                                    <td>$15,000</td>
                                                </tr>
                                                <tr>
                                                    <td>New York</td>
                                                    <td>$10,000</td>
                                                    <td>200</td>
                                                    <td>$15,000</td>
                                                </tr>
                                                <tr>
                                                    <td>New York</td>
                                                    <td>$10,000</td>
                                                    <td>200</td>
                                                    <td>$15,000</td>
                                                </tr>
                                                <tr>
                                                    <td>New York</td>
                                                    <td>$10,000</td>
                                                    <td>200</td>
                                                    <td>$15,000</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="booking-slot">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booking-slot-button d-flex justify-content-between mb-3">
                                <div class="left d-flex align-items-center">
                                    <h3>Booked Slot Status</h3>
                                </div>
                                <div class="right d-flex">
                                    <a href="{{ route('store_management.offline.offline_status') }}">View All</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="booking-table">

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Vending Location</th>
                                                <th>Vending Code</th>
                                                <th>Stock Now</th>
                                                <th>Category</th>
                                                <th>Left Day</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>VM1234</td>
                                                <td>50</td>
                                                <td>Snacks</td>
                                                <td>34 Days Remaining</td>
                                                <td>
                                                    <a href="#" class="btn outline-green rebook-btn" style=""
                                                        data-toggle="modal" data-target="#rebookModal">Re-book</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>VM1234</td>
                                                <td>50</td>
                                                <td>Snacks</td>
                                                <td>7 Days Remaining</td>
                                                <td>
                                                    <a href="#" class="btn outline-green rebook-btn" style=""
                                                        data-toggle="modal" data-target="#rebookModal">Re-book</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>VM1234</td>
                                                <td>50</td>
                                                <td>Snacks</td>
                                                <td>34 Days Remaining</td>
                                                <td>
                                                    <a href="#" class="btn outline-green rebook-btn" style=""
                                                        data-toggle="modal" data-target="#rebookModal">Re-book</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>VM1234</td>
                                                <td>50</td>
                                                <td>Snacks</td>
                                                <td>7 Days Remaining</td>
                                                <td>
                                                    <a href="#" class="btn outline-green rebook-btn" style=""
                                                        data-toggle="modal" data-target="#rebookModal">Re-book</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="booking-slot">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booking-slot-button d-flex justify-content-between mb-3">
                                <div class="left d-flex align-items-center">
                                    <h3>Monthly Sale</h3>
                                </div>
                                <div class="right d-flex">
                                    <a href="{{ route('store_management.offline.offline_monthly_sale') }}">View All</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="booking-table">

                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Vending Location</th>
                                                <th>Product Name</th>
                                                <th>Month</th>
                                                <th>Total Unit</th>
                                                <th>Product Preview</th>
                                            </tr>

                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>Potato Chips</td>
                                                <td>August, 24</td>
                                                <td>300</td>
                                                <td>
                                                    <div class=" booking-action">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">
                                                            <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                                alt="View">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>Potato Chips</td>
                                                <td>August, 24</td>
                                                <td>300</td>
                                                <td>
                                                    <div class=" booking-action">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">
                                                            <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                                alt="View">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>Potato Chips</td>
                                                <td>August, 24</td>
                                                <td>300</td>
                                                <td>
                                                    <div class=" booking-action">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">
                                                            <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                                alt="View">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/client/images/slot-booking.png') }}"
                                                        style="height: 32px; width: 32px;">
                                                    <span>12/A Downtown Plaza, Michigan...</span>
                                                </td>
                                                <td>Potato Chips</td>
                                                <td>August, 24</td>
                                                <td>300</td>
                                                <td>
                                                    <div class=" booking-action">
                                                        <a href="#" data-toggle="modal" data-target="#myModal">
                                                            <img src="{{ asset('assets/client/images/icon/view.svg') }}"
                                                                alt="View">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 45%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmed">
                    <div class="booking-confirmed-left">
                        <div class="confirmed-image-2">
                            <img src="{{ asset('assets/client/images/cola.png') }}" alt="">
                        </div>
                    </div>
                    <div class="booking-confirmed-right">
                        <div class="comfirmed-text">
                            <h4>Selling Details</h4>
                            <ul>
                                <li><span>Order ID: </span>123456</li>
                                <li><span>Machine ID: </span>147785</li>
                                <li><span>Location: </span>Full Address goes here</li>
                                <li><span>Total Quantity: </span>112</li>
                            </ul>
                            <a href="" class="btn w-100">Back to Pending Bookings</a>
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

    {{-- Rebook Modal --}}
    <div class="modal fade" id="rebookModal" tabindex="-1" role="dialog" aria-labelledby="rebookModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmation-seller">
                    <div class="booking-confirmation-seller-left">
                        <div class="center mt-5 pt-5">
                            <div class="image-text-container">
                                <div class="image-borde">
                                    <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="">
                                </div>
                                <div class="image-area">
                                    <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                                </div>
                                <div class="image-area">
                                    <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                                </div>
                                <div class="image-area" data-dismiss="modal" data-toggle="modal" data-target="#newModal"
                                    role="button">
                                    5+
                                </div>
                            </div>
                            <h4 class="mt-3">Full Location Name Goes <span class="d-block">Here...</span></h4>
                            <p><span>Vending Type: </span>Small</p>
                            <p><span>Location: </span>Full Location Goes Here....</p>
                            <p><span>Location Type:</span>
                                <span class="badge-custom">Outdoor</span>
                                <span class="badge-custom">Public</span>
                            </p>
                            <p><span>Nearby:</span>
                                <span class="badge-custom">Hospital</span>
                                <span class="badge-custom">School</span>
                                <span class="badge-custom">+5</span>
                            </p>
                            <p><span>Total Slots: </span>36</p>
                            <p><span>Available Slots: </span>36</p>
                        </div>
                    </div>
                    <div class="booking-confirmation-seller-right">

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Booking Confirmation</h3>
                                <h4>Choose Product & Slots <small class="text-warning">*</small></h4>

                                <div class="selected-slot-booking mb-3">
                                    <div class="image">
                                        <img src="{{ asset('assets/client/images/cola.png') }}" alt="cola">
                                    </div>

                                    <div class="booking-selected-slog">
                                        <div class="slot-list-booking">
                                            <span class="booking-slot mb-1">C4</span>
                                            <span class="booking-slot mb-1">C1 & C2</span>
                                        </div>
                                    </div>

                                    <div class="close-btn">
                                        <img src="{{ asset('assets/client/images/icon/close-red-sq.svg') }}"
                                            alt="">
                                    </div>
                                </div>


                                <h4>Booking Timeline <small class="text-warning">*</small></h4>

                                <div class="btn-group-toggle btn-group-flex mb-3" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="timeline" autocomplete="off"> 3 Months
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="timeline" autocomplete="off"> 6 Months
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="timeline" autocomplete="off"> 12 Months
                                    </label>
                                </div>

                                <h4>Price Break Down <small class="text-warning">*</small></h4>

                                <div class="btn-group-toggle btn-group-flex mb-3" data-toggle="buttons">
                                    <label class="btn booking-text-green">
                                        <input type="radio" name="timeline" autocomplete="off"> $125 <span
                                            class="d-block">Total Slots Price (Monthly)</span>
                                    </label>
                                    <div style="flex: 1;"></div>
                                    <label class="btn booking-text-green">
                                        <input type="radio" name="timeline" autocomplete="off"> $137.5 <span
                                            class="d-block">Total Price (6 Months)</span>
                                    </label>
                                </div>

                                <h4>Select Payment Method <small class="text-warning">*</small></h4>

                                <div class="payment-method-container">
                                    <div class="row no-gutters">
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/client/images/payment/apple-pay.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/dashboard/images/paypal.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/client/images/payment/klarna.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/client/images/payment/coinbase.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/client/images/payment/bai.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-container">
                                                <button class="btn"><img
                                                        src="{{ asset('assets/client/images/payment/pin.png') }}"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-number-section">
                                        <div class="payment-card-header">
                                            <div class="left">
                                                <img src="{{ asset('assets/client/images/icon/card.svg') }}"
                                                    alt="">
                                                <h5 class="m-0 ml-2">Card</h5>
                                            </div>

                                            <div class="right">
                                                <img src="{{ asset('assets/client/images/payment/visa.png') }}"
                                                    alt="">
                                                <img src="{{ asset('assets/client/images/payment/master-card.png') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group px-1 mb-1">
                                                    <label class="mb-1 p-0" for="email">Card No.</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="xxxx - xxxx - xxxx" id="email">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group px-1 mb-1">
                                                    <label class="mb-1 p-0" for="email">Expiry Date</label>
                                                    <input type="text" class="form-control" placeholder="dd/mm"
                                                        onfocus="(this.type='date')"
                                                        onblur="if(!this.value)this.type='text'">

                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group px-1 mb-1">
                                                    <label class="mb-1 p-0" for="email">CVC</label>
                                                    <input type="text" class="form-control" placeholder="CVC"
                                                        id="email">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-check mt-2 mb-3">
                                        <label class="form-check-label text-dark">
                                            <input type="checkbox" class="form-check-input" name=""
                                                id="" value="checkedValue" checked>
                                            <small>By clicking, you agree to our Terms on Biding for a Slot.</small>
                                        </label>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <button class="btn w-100 submit">
                                    Confirm Booking
                                </button>
                            </div>

                            <div class="col-md-6">
                                <button class="btn w-100 outline-green">
                                    Edit Booking
                                </button>
                            </div>
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
@endsection
