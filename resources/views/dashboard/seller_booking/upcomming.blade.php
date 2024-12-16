@extends('dashboard.master')

@section('content')
    <div class="upcomming mt-2">
        <h3>Newly Listed Locations in Emuna</h3>

        <div class="row">
            <div class="col-md-3">
                <div class="new-list-container">
                    <div class="new-list-scroll">
                        <div class="new-list">

                            <div class="list-heading">
                                <div class="images">
                                    <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="">
                                </div>
                                <div>
                                    <h4 class="ml-2">Full Location Name Goes Here...</h4>
                                </div>
                            </div>

                            <p><span>Vending Type:</span> Small</p>
                            <p><span>Location:</span> Full Location Goes Here....</p>
                            <p><span>Location Type: </span> <span class="badge-custom">Outdoor</span> <span
                                    class="badge-custom">Public</span></p>
                            <p><span>Nearby: </span> <span class="badge-custom">Hospital</span> <span
                                    class="badge-custom">School</span> <span class="badge-custom">+5</span></p>
                            <p><span>Total Slots: </span>36</p>
                            <p><span>Available Slots: </span>20</p>

                            <div class="progress-bar-overview">
                                <div class="active-progress-overview">
                                    <h3>Activation Progress:</h3>
                                    <h5 class="text-success">80%</h5>
                                </div>

                                <div class="progress" style="height: 10px">
                                    <div class="progress-bar bg-success" style="width: 20%;" role="progressbar"><span
                                            class="sr-only">60% Complete</span>
                                    </div>
                                </div>


                                <div class="active-progress-overview">
                                    <h4 class="m-0">0%</h4>
                                    <h4 class="m-0">100%</h4>
                                </div>
                            </div>
                        </div>

                        <div class="new-list">
                            <div class="list-heading">
                                <div class="images">
                                    <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="">
                                </div>
                                <div>
                                    <h4 class="ml-2">Full Location Name Goes Here...</h4>
                                </div>
                            </div>

                            <p><span>Vending Type:</span> Small</p>
                            <p><span>Location:</span> Full Location Goes Here....</p>
                            <p><span>Location Type: </span> <span class="badge-custom">Outdoor</span> <span
                                    class="badge-custom">Public</span></p>
                            <p><span>Nearby: </span> <span class="badge-custom">Hospital</span> <span
                                    class="badge-custom">School</span> <span class="badge-custom">+5</span></p>
                            <p><span>Total Slots: </span>36</p>
                            <p><span>Available Slots: </span>20</p>

                            <div class="progress-bar-overview">
                                <div class="active-progress-overview">
                                    <h3>Activation Progress:</h3>
                                    <h5 class="text-success">80%</h5>
                                </div>

                                <div class="progress" style="height: 10px">
                                    <div class="progress-bar bg-success" style="width: 20%;" role="progressbar"><span
                                            class="sr-only">60% Complete</span>
                                    </div>
                                </div>


                                <div class="active-progress-overview">
                                    <h4 class="m-0">0%</h4>
                                    <h4 class="m-0">100%</h4>
                                </div>
                            </div>
                        </div>


                        <div class="new-list">

                            <div class="list-heading">
                                <div class="images">
                                    <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="">
                                </div>
                                <div>
                                    <h4 class="ml-2">Full Location Name Goes Here...</h4>
                                </div>
                            </div>

                            <p><span>Vending Type:</span> Small</p>
                            <p><span>Location:</span> Full Location Goes Here....</p>
                            <p><span>Location Type: </span> <span class="badge-custom">Outdoor</span> <span
                                    class="badge-custom">Public</span></p>
                            <p><span>Nearby: </span> <span class="badge-custom">Hospital</span> <span
                                    class="badge-custom">School</span> <span class="badge-custom">+5</span></p>
                            <p><span>Total Slots: </span>36</p>
                            <p><span>Available Slots: </span>20</p>

                            <div class="progress-bar-overview">
                                <div class="active-progress-overview">
                                    <h3>Activation Progress:</h3>
                                    <h5 class="text-success">80%</h5>
                                </div>

                                <div class="progress" style="height: 10px">
                                    <div class="progress-bar bg-success" style="width: 20%;" role="progressbar"><span
                                            class="sr-only">60% Complete</span>
                                    </div>
                                </div>


                                <div class="active-progress-overview">
                                    <h4 class="m-0">0%</h4>
                                    <h4 class="m-0">100%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="new-list-container-left pb-0" style="border-radius: 12px 12px 0px 0px;">
                    <div class="slot-booking-pending">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="location-lis mb-3">Location Details</h4>
                                <div class="booking-card">
                                    <!-- Order ID -->
                                    <div class="booking-item">
                                        <div class="booking-label">Contact Person</div>
                                        <div class="booking-value">Contact Person Full Name Goes Here</div>
                                    </div>
                                    <div class="booking-item">
                                        <div class="booking-label">Company Name</div>
                                        <div class="booking-value">Company Name Goes Here</div>
                                    </div>

                                    <!-- Vending Machine ID -->
                                    <div class="booking-item">
                                        <div class="booking-label">Email</div>
                                        <div class="booking-value">websitemail@demo.com</div>
                                    </div>
                                    <!-- Vending Machine Location -->
                                    <div class="booking-item">
                                        <div class="booking-label">Phone</div>
                                        <div class="booking-value">+000 123 456 7890</div>
                                    </div>
                                    <div class="booking-item">
                                        <div class="booking-label">Location</div>
                                        <div class="booking-value">Full Location Goes Here</div>
                                    </div>
                                    <!-- Nearby -->
                                    <div class="booking-item">
                                        <div class="booking-label">Nearby</div>
                                        <div class="booking-value">
                                            <span class="badge-custom">Hospital</span>
                                            <span class="badge-custom">School</span>
                                            <span class="badge-custom">Play Ground</span>
                                            <span class="badge-custom">College</span>
                                            <span class="badge-custom">University</span>
                                        </div>
                                    </div>
                                    <div class="booking-item">
                                        <div class="booking-label">Location Type</div>
                                        <div class="booking-value">
                                            <span class="badge-custom">Outdoor</span>
                                            <span class="badge-custom">Public</span>
                                        </div>
                                    </div>
                                    <!-- Availability -->
                                    <div class="booking-item">
                                        <div class="booking-label">Availability</div>
                                        <div class="booking-value">
                                            <span class="badge-custom">Mon - Fri (9am - 6pm)</span>
                                            <span class="badge-custom">Sat (9am - 12pm)</span>
                                        </div>
                                    </div>

                                    <div class="booking-item">
                                        <div class="booking-label">Status</div>
                                        <div class="booking-value text-warning">Pending</div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="booking-overview">
                                    <h4>Booking Overview</h4>

                                    <div class="circle-overview mt-3">
                                        <div class="pre">
                                            <h6>16</h6>
                                            <p>Pre-Booked</p>
                                        </div>
                                        <div class="avil">
                                            <h6>16</h6>
                                            <p>Available Slots</p>
                                        </div>
                                        <div class="oper">
                                            <h6>16</h6>
                                            <p>Operating Brands</p>
                                        </div>
                                    </div>

                                    <div class="progress-bar-overview mt-2">
                                        <div class="active-progress-overview">
                                            <h4>Activation Progress:</h4>
                                            <h4 class="text-success">80%</h4>
                                        </div>

                                        <div class="progress" style="height: 20px">
                                            <div class="progress-bar bg-success" style="width: 20%;" role="progressbar">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>


                                        <div class="active-progress-overview">
                                            <h4 class="m-0">0%</h4>
                                            <h4 class="m-0">100%</h4>
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn pre-booking w-100" data-toggle="modal"
                                            data-target="#preBookingModal">
                                            Pre-Book a Slot
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="new-list-container-left pb-0" style="border-radius: 0 0 0 0;">
                    <div class="slot-booking-pending">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new-list-image mt-0">
                                    <h3>Location Images</h3>

                                    <div class="image-container mt-2">
                                        <img src="{{ asset('assets/client/images/pre.png') }}" alt="Image 1">
                                        <img src="{{ asset('assets/client/images/pre.png') }}" alt="Image 1">
                                        <img src="{{ asset('assets/client/images/pre.png') }}" alt="Image 1">
                                        <img src="{{ asset('assets/client/images/pre.png') }}" alt="Image 1">
                                        <img src="{{ asset('assets/client/images/pre.png') }}" alt="Image 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new-list-container-left" style="border-radius: 0 0 12px 12px;">
                    <div class="slot-booking-pending">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="d-flex align-items-center mb-3">
                                    <h3 class="m-0 mr-2">Products That Pre-Booked</h3>
                                    <img src="{{ asset('assets/client/images/icon/crown.svg') }}" alt="">
                                </div>

                                <div class="booking-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="font-weight-medium">Product Name</th>
                                                    <th class="font-weight-medium">Remaining Days</th>
                                                    <th class="font-weight-medium">Category</th>
                                                    <th class="font-weight-medium">Duration</th>
                                                    <th class="font-weight-medium">Booked Slots</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider font-weight-medium">
                                                <tr>
                                                    <td>
                                                        <img src="http://127.0.0.1:8000/assets/client/images/slot-booking.png"
                                                            style="height: 32px; width: 32px;">
                                                        <span>Full Product Name Goes Here...</span>
                                                    </td>
                                                    <td>Full Brand Name Goes Here...</td>
                                                    <td>Product Category</td>
                                                    <td>3 Months</td>
                                                    <td>2</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="http://127.0.0.1:8000/assets/client/images/slot-booking.png"
                                                            style="height: 32px; width: 32px;">
                                                        <span>Full Product Name Goes Here...</span>
                                                    </td>
                                                    <td>Full Brand Name Goes Here...</td>
                                                    <td>Product Category</td>
                                                    <td>3 Months</td>
                                                    <td>2</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="http://127.0.0.1:8000/assets/client/images/slot-booking.png"
                                                            style="height: 32px; width: 32px;">
                                                        <span>Full Product Name Goes Here...</span>
                                                    </td>
                                                    <td>Full Brand Name Goes Here...</td>
                                                    <td>Product Category</td>
                                                    <td>3 Months</td>
                                                    <td>2</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="http://127.0.0.1:8000/assets/client/images/slot-booking.png"
                                                            style="height: 32px; width: 32px;">
                                                        <span>Full Product Name Goes Here...</span>
                                                    </td>
                                                    <td>Full Brand Name Goes Here...</td>
                                                    <td>Product Category</td>
                                                    <td>3 Months</td>
                                                    <td>2</td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="http://127.0.0.1:8000/assets/client/images/slot-booking.png"
                                                            style="height: 32px; width: 32px;">
                                                        <span>Full Product Name Goes Here...</span>
                                                    </td>
                                                    <td>Full Brand Name Goes Here...</td>
                                                    <td>Product Category</td>
                                                    <td>3 Months</td>
                                                    <td>2</td>
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



    <!-- Modal -->
    <div class="modal fade" id="preBookingModal" tabindex="-1" role="dialog" aria-labelledby="preBookingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;" role="document">
            <div class="modal-content">
                <div class="booking-confirmation-seller">
                    <div class="booking-confirmation-seller-left">
                        <div class="center">
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

                                <button type="button" class="btn btn-primary open-product mb-3" data-dismiss="modal"
                                    data-toggle="modal" data-target="#productModal">
                                    <i class="fas fa-plus"></i>
                                    <span>Add Another</span>
                                </button>


                                <h4>Booking Timeline <small class="text-warning">*</small></h4>

                                <div class="btn-group-toggle btn-group-flex mb-5" data-toggle="buttons">
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

                            </div>

                            <div class="col-md-12">
                                <button class="btn w-100 submit">
                                    Confirm Booking
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

    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 40%;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn back-to-preBook" data-dismiss="modal" data-toggle="modal"
                        data-target="#preBookingModal"><i class="fas fa-chevron-left mr-2"></i> Location Images</button>
                </div>
                <div class="modal-body">
                    <div class="location-slider">
                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>
                    </div>

                    <div class="location-slider-nav">
                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>

                        <div class="slider-item">
                            <img src="{{ asset('assets/client/images/pre.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn back-to-preBook" data-dismiss="modal" data-toggle="modal"
                        data-target="#preBookingModal"><i class="fas fa-chevron-left mr-2"></i> Choose Product</button>
                </div>
                <div class="modal-body" style="height: 500px; overflow-y: auto;">
                    <div class="row no-gutters">
                        @foreach ($products as $product)
                            <div data-dismiss="modal" data-toggle="modal" data-target="#preBookingModal"
                                class="col-6 py-2 px-2" data-product='@json($product)'>
                                <div class="card h-100 border item-select-list" style="border-color: #007bff;">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-5">
                                            <div class="image text-center">
                                                <img src="{{ $product->image }}" width="70" class="img-fluid"
                                                    alt="{{ $product->name }}">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $product->name }}</h5>
                                                <ul class="card-text m-0 p-0 list-unstyled">
                                                    <li><strong>Brand:</strong> {{ $product->brand }}</li>
                                                    <li><strong>Category:</strong> {{ $product->category }}</li>
                                                    <li><strong>Price:</strong> {{ $product->price }}
                                                    </li>
                                                    <li><strong>Stocks:</strong> {{ $product->stocks }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
