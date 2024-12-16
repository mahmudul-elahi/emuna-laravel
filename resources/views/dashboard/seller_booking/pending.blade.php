@extends('dashboard.master')

@section('content')
    <div class="seller-pending">
        <div class="row">
            <div class="col-md-4">
                <div class="painding-list">
                    <div class="pending-list-heading">
                        <h4>Pending Bookings List</h4>
                        <p>(65 Bookings)</p>
                    </div>

                    <div class="pending-list-sorting">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Order ID">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="pendingSort">
                                <option value="all">All</option>
                                <option value="ppproved">Approved</option>
                                <option value="pending">Pending</option>
                                <option value="rejected">Rejected</option>
                            </select>
                        </div>
                    </div>

                    <div class="pending-list-container">
                        <div class="pending-item" onclick="loadview('success')">
                            <div class="location">
                                <div class="img">
                                    <img style="height: 40px; width: 40px;"
                                        src="{{ asset('assets/client/images/slot-booking.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Full Location Name Goes...</h5>
                                </div>
                            </div>

                            <div class="info">
                                <div class="left">
                                    <p><span>Product:</span> Product Name Here...</p>
                                    <p><span>Brand:</span> Brand Name Goes Here</p>
                                    <p><span>Category:</span> Category Name Here</p>
                                    <p><span>Price Per Unit:</span> $5</p>
                                </div>
                                <div class="right">
                                    <p><span>Vending ID:</span> 147852</p>
                                    <p><span>Booked Slots:</span> 5</p>
                                    <p><span>Total Cost:</span> $125.99</p>
                                    <p><span>Sale`s Commission:</span> 10%</p>
                                </div>
                            </div>


                            <div class="status-pdf">
                                <div class="download-pdf">
                                    <a href="#" class="btn btn-sm"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt="">
                                        Invoice.pdf</a>
                                    <a href="{{ route('seller.booking.download') }}" class="btn btn-sm ml-2"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt=""> Order
                                        Note</a>
                                </div>
                                <div class="status">
                                    <p class="m-0 pr-2">Approved</p>
                                </div>
                            </div>
                        </div>

                        <div class="pending-item" onclick="loadview('pending')">
                            <div class="location">
                                <div class="img">
                                    <img style="height: 40px; width: 40px;"
                                        src="{{ asset('assets/client/images/slot-booking.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Full Location Name Goes...</h5>
                                </div>
                            </div>

                            <div class="info">
                                <div class="left">
                                    <p><span>Product:</span> Product Name Here...</p>
                                    <p><span>Brand:</span> Brand Name Goes Here</p>
                                    <p><span>Category:</span> Category Name Here</p>
                                    <p><span>Price Per Unit:</span> $5</p>
                                </div>
                                <div class="right">
                                    <p><span>Vending ID:</span> 147852</p>
                                    <p><span>Booked Slots:</span> 5</p>
                                    <p><span>Total Cost:</span> $125.99</p>
                                    <p><span>Sale`s Commission:</span> 10%</p>
                                </div>
                            </div>


                            <div class="status-pdf">
                                <div class="download-pdf">
                                    <a href="#" class="btn btn-sm"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt="">
                                        Invoice.pdf</a>
                                    <a href="#" class="btn btn-sm ml-2"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt=""> Order
                                        Note</a>
                                </div>
                                <div class="status">
                                    <p class="m-0 pr-2 text-warning">Pending</p>
                                </div>
                            </div>
                        </div>

                        <div class="pending-item" onclick="loadview('reject')">
                            <div class="location">
                                <div class="img">
                                    <img style="height: 40px; width: 40px;"
                                        src="{{ asset('assets/client/images/slot-booking.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h5>Full Location Name Goes...</h5>
                                </div>
                            </div>

                            <div class="info">
                                <div class="left">
                                    <p><span>Product:</span> Product Name Here...</p>
                                    <p><span>Brand:</span> Brand Name Goes Here</p>
                                    <p><span>Category:</span> Category Name Here</p>
                                    <p><span>Price Per Unit:</span> $5</p>
                                </div>
                                <div class="right">
                                    <p><span>Vending ID:</span> 147852</p>
                                    <p><span>Booked Slots:</span> 5</p>
                                    <p><span>Total Cost:</span> $125.99</p>
                                    <p><span>Sale`s Commission:</span> 10%</p>
                                </div>
                            </div>


                            <div class="status-pdf">
                                <div class="download-pdf">
                                    <a href="#" class="btn btn-sm"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt="">
                                        Invoice.pdf</a>
                                    <a href="#" class="btn btn-sm ml-2"><img
                                            src="{{ asset('assets/client/images/icon/pdf.svg') }}" alt=""> Order
                                        Note</a>
                                </div>
                                <div class="status">
                                    <p class="m-0 pr-2 text-danger">Rejected</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-8">
                <div id="show-content">
                    <div id="success" class="content-section">
                        @include('dashboard.seller_booking.pending_content.success')
                    </div>
                    <div id="pending" class="content-section" style="display: none;">
                        @include('dashboard.seller_booking.pending_content.pending')
                    </div>
                    <div id="reject" class="content-section" style="display: none;">
                        @include('dashboard.seller_booking.pending_content.reject')
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="submitTracking" tabindex="-1" role="dialog" aria-labelledby="submitTrackingLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 40%;" role="document">
            <div class="modal-content">
                <div class="submit-tracking">
                    <div class="submit-tracking-left">
                        <div class="submit-tracking-left-image">
                            <img src="{{ asset('assets/client/images/signup-finished.png') }}" alt="">
                        </div>
                    </div>
                    <div class="submit-tracking-right">
                        <h3>Order Note Generated</h3>
                        <ul>
                            Order Note has been generated. Wait for the vending owner to receive your product. Would you
                            like to print the order note?
                        </ul>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn w-100 submit">
                                        Yes, Print
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn w-100 no">
                                        No
                                    </a>
                                </div>
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


    <div class="modal fade" id="cancelBooking" tabindex="-1" role="dialog" aria-labelledby="cancelBookingLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 40%;" role="document">
            <div class="modal-content">
                <div class="submit-tracking">
                    <div class="submit-tracking-left">
                        <div class="submit-tracking-left-image">
                            <img src="{{ asset('assets/client/images/icon/reject.png') }}" alt="">
                        </div>
                    </div>
                    <div class="submit-tracking-right">
                        <h3>Order Note Generated</h3>
                        <ul>
                            Are you sure you want to cancel your booking request? By cancelling, you will receive your
                            refund within 3 working days.
                        </ul>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn w-100 cancel" data-toggle="modal"
                                        data-target="#confirmationModal" data-dismiss="modal">
                                        Yes, Cancel
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn w-100 no" data-dismiss="modal">
                                        No
                                    </a>
                                </div>
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

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 40%;" role="document">
            <div class="modal-content">
                <div class="submit-tracking">
                    <div class="submit-tracking-left">
                        <div class="submit-tracking-left-image">
                            <img src="{{ asset('assets/client/images/icon/reject.png') }}" alt="">
                        </div>
                    </div>
                    <div class="submit-tracking-right">
                        <h3>Booking Cancelled</h3>
                        <ul>
                            Your booking has been cancelled. Please wait for 3 working days for your refund.
                        </ul>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn w-100 submit" data-toggle="modal"
                                        data-target="#confirmationModal" data-dismiss="modal">
                                        Back to Pending Bookings
                                    </a>
                                </div>

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
